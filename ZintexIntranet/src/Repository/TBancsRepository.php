<?php

namespace App\Repository;

use App\Entity\TBancs;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method TBancs|null find($id, $lockMode = null, $lockVersion = null)
 * @method TBancs|null findOneBy(array $criteria, array $orderBy = null)
 * @method TBancs[]    findAll()
 * @method TBancs[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TBancsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TBancs::class);
    }

    // /**
    //  * @return TBancs[] Returns an array of TBancs objects
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
    public function findOneBySomeField($value): ?TBancs
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
