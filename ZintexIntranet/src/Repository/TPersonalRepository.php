<?php

namespace App\Repository;

use App\Entity\TPersonal;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method TPersonal|null find($id, $lockMode = null, $lockVersion = null)
 * @method TPersonal|null findOneBy(array $criteria, array $orderBy = null)
 * @method TPersonal[]    findAll()
 * @method TPersonal[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TPersonalRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TPersonal::class);
    }

    // /**
    //  * @return TPersonal[] Returns an array of TPersonal objects
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
    public function findOneBySomeField($value): ?TPersonal
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
