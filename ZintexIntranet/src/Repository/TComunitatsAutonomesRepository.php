<?php

namespace App\Repository;

use App\Entity\TComunitatsAutonomes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method TComunitatsAutonomes|null find($id, $lockMode = null, $lockVersion = null)
 * @method TComunitatsAutonomes|null findOneBy(array $criteria, array $orderBy = null)
 * @method TComunitatsAutonomes[]    findAll()
 * @method TComunitatsAutonomes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TComunitatsAutonomesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TComunitatsAutonomes::class);
    }

    // /**
    //  * @return TComunitatsAutonomes[] Returns an array of TComunitatsAutonomes objects
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
    public function findOneBySomeField($value): ?TComunitatsAutonomes
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
