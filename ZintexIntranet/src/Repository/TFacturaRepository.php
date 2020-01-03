<?php

namespace App\Repository;

use App\Entity\TFactura;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\Tools\Pagination\Paginator;

/**
 * @method TFactura|null find($id, $lockMode = null, $lockVersion = null)
 * @method TFactura|null findOneBy(array $criteria, array $orderBy = null)
 * @method TFactura[]    findAll()
 * @method TFactura[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TFacturaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TFactura::class);
    }

    public function paginate($query, $page, $limit){
        $paginator = new Paginator($query);
        $paginator->getQuery()
        ->setFirstResult($limit * ($page - 1)) // Offset
        ->setMaxResults($limit); // Limit
        
        return $paginator;
    }

    public function getFacturasByClientWithFilters($client, $filters)
    {

        $qb = $this->createQueryBuilder("cli")
        ->select()
        ->andWhere("cli.Client_Factura = :cli")
        ->setParameter("cli", $client)
        ->getQuery();

        $paginator = $this->paginate($qb, $filters["page"], 15);

        return ["paginator"=>$paginator, "query"=>$qb];
    }

    public function getFacturasPaginated($filters, $limit)
    {
        $query = $this->createQueryBuilder("prod")
        ->select()
        ->getQuery();

        $paginator = $this->paginate($query, $filters["page"], $limit);

        return ["paginator"=>$paginator,"query"=>$query];
    }

    // /**
    //  * @return TFactura[] Returns an array of TFactura objects
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
    public function findOneBySomeField($value): ?TFactura
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
