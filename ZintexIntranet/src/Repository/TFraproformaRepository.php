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
    private $LIMIT = 30;
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

    public function getFraProformasPaginated($currentPage, $limit)
    {
        $query = $this->createQueryBuilder("fra")
        ->select()
        ->getQuery();

        $paginator = $this->paginate($query, $currentPage, $limit);

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
