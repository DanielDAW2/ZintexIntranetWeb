<?php

namespace App\Repository;

use App\Entity\TColors;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method TColors|null find($id, $lockMode = null, $lockVersion = null)
 * @method TColors|null findOneBy(array $criteria, array $orderBy = null)
 * @method TColors[]    findAll()
 * @method TColors[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TColorsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TColors::class);
    }

    // /**
    //  * @return TColors[] Returns an array of TColors objects
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
    public function findOneBySomeField($value): ?TColors
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
