<?php

namespace App\Repository;

use App\Entity\TClients;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\Tools\Pagination\Paginator;

/**
 * @method TClients|null find($id, $lockMode = null, $lockVersion = null)
 * @method TClients|null findOneBy(array $criteria, array $orderBy = null)
 * @method TClients[]    findAll()
 * @method TClients[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TClientsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TClients::class);
    }

    public function paginate($query, $page, $limit){
        $paginator = new Paginator($query);
        $paginator->getQuery()
        ->setFirstResult($limit * ($page - 1)) // Offset
        ->setMaxResults($limit); // Limit
        
        return $paginator;
    }


    public function getClientsPaginated($currentPage, $limit)
    {
        $query = $this->createQueryBuilder("cli")
        ->select()
        ->getQuery();

        $paginator = $this->paginate($query, $currentPage, $limit);

        return ["paginator"=>$paginator,"query"=>$query];
    }

    public function findClients(string $index)
    {
        return $this->createQueryBuilder("q")
        ->select("q.idCli as id, q.client as text")
        ->andWhere("q.client LIKE :index")
        ->setParameter("index","%".$index."%")
        ->getQuery()->getResult();

    }

    public function getClientsByComercial($comercial)
    {
        $qb = $this->createQueryBuilder("q")
        ->select()
        ->andWhere("q.numAgentComercial = :comercial")
        ->setParameter("comercial", $comercial)
        ->getQuery()->getResult();
        return $qb;
    }

    // /**
    //  * @return TClients[] Returns an array of TClients objects
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
    public function findOneBySomeField($value): ?TClients
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
