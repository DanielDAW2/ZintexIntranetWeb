<?php

namespace App\Repository;

use App\Entity\TAutorsPresup;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method TAutorsPresup|null find($id, $lockMode = null, $lockVersion = null)
 * @method TAutorsPresup|null findOneBy(array $criteria, array $orderBy = null)
 * @method TAutorsPresup[]    findAll()
 * @method TAutorsPresup[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TAutorsPresupRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TAutorsPresup::class);
    }

    // /**
    //  * @return TAutorsPresup[] Returns an array of TAutorsPresup objects
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
    public function findOneBySomeField($value): ?TAutorsPresup
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
