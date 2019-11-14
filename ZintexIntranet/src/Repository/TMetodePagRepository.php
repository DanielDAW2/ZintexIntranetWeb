<?php

namespace App\Repository;

use App\Entity\TMetodePag;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method TMetodePag|null find($id, $lockMode = null, $lockVersion = null)
 * @method TMetodePag|null findOneBy(array $criteria, array $orderBy = null)
 * @method TMetodePag[]    findAll()
 * @method TMetodePag[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TMetodePagRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TMetodePag::class);
    }

    // /**
    //  * @return TMetodePag[] Returns an array of TMetodePag objects
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
    public function findOneBySomeField($value): ?TMetodePag
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
