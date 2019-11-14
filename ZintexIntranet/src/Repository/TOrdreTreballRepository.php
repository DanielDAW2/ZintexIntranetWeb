<?php

namespace App\Repository;

use App\Entity\TOrdreTreball;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method TOrdreTreball|null find($id, $lockMode = null, $lockVersion = null)
 * @method TOrdreTreball|null findOneBy(array $criteria, array $orderBy = null)
 * @method TOrdreTreball[]    findAll()
 * @method TOrdreTreball[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TOrdreTreballRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TOrdreTreball::class);
    }

    // /**
    //  * @return TOrdreTreball[] Returns an array of TOrdreTreball objects
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
    public function findOneBySomeField($value): ?TOrdreTreball
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
