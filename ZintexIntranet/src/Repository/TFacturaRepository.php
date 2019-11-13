<?php

namespace App\Repository;

use App\Entity\TFactura;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

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
