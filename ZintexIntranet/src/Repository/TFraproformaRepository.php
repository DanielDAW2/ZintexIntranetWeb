<?php

namespace App\Repository;

use App\Entity\TFraproforma;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\DBAL\Query\QueryBuilder;
use Doctrine\ORM\Tools\Pagination\Paginator;

/**
 * @method TFraproforma|null find($id, $lockMode = null, $lockVersion = null)
 * @method TFraproforma|null findOneBy(array $criteria, array $orderBy = null)
 * @method TFraproforma[]    findAll()
 * @method TFraproforma[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TFraproformaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TFraproforma::class);
    }

    public function paginate($query, $page, $limit){
        $paginator = new Paginator($query);
        $paginator->getQuery()
        ->setFirstResult($limit * ($page - 1)) // Offset
        ->setMaxResults($limit); // Limit
        
        return $paginator;
    }

    public function getFraProformasPaginated($filters, $limit)
    {
        $query = $this->createQueryBuilder("fra")
        ->select()
        ->orderBy("fra.idFraprof","DESC");

        if($filters["date-from"] || $filters["date-to"])
        {
            if($filters["date-to"] && $filters["date-from"])
            {
               $query->andWhere("fra.dataFraprof BETWEEN :from AND :to")
            ->setParameters(["from"=>$filters["date-from"],"to"=>$filters["date-to"]]); 
            }else{
                $query->andWhere("fra.dataFraprof > :date")
            ->setParameter("date", $filters["date-from"] ? $filters["date-from"] : $filters["date-to"]); 

            }
        }
        $query->getQuery();

        

        $paginator = $this->paginate($query, trim($filters["page"]), $limit);

        return ["paginator"=>$paginator,"query"=>$query];
    }

    public function findNumProformas(string $index)
    {
        return $this->createQueryBuilder("q")
        ->select("q.idFraprof as id, q.numFraprof as text")
        ->andWhere("q.numFraprof LIKE :index")
        ->setParameter("index","%".$index."%")
        ->getQuery()->getResult();

    }

    public function getProformasByClientWithFilters($client, $filters)
    {

        $qb = $this->createQueryBuilder("cli")
        ->select()
        ->andWhere("cli.clientFraprof = :cli")
        ->setParameter("cli", $client)
        ->getQuery();

        $paginator = $this->paginate($qb, $filters["page"], 15);

        return ["paginator"=>$paginator, "query"=>$qb];
    }

    // /**
    //  * @return TFraproforma[] Returns an array of TFraproforma objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TFraproforma
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
