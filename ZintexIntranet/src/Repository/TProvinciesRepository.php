<?php

namespace App\Repository;

use App\Entity\TProvincies;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method TProvincies|null find($id, $lockMode = null, $lockVersion = null)
 * @method TProvincies|null findOneBy(array $criteria, array $orderBy = null)
 * @method TProvincies[]    findAll()
 * @method TProvincies[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TProvinciesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TProvincies::class);
    }

    // /**
    //  * @return TProvincies[] Returns an array of TProvincies objects
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
    public function findOneBySomeField($value): ?TProvincies
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
