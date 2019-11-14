<?php

namespace App\Repository;

use App\Entity\TEmpreses;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method TEmpreses|null find($id, $lockMode = null, $lockVersion = null)
 * @method TEmpreses|null findOneBy(array $criteria, array $orderBy = null)
 * @method TEmpreses[]    findAll()
 * @method TEmpreses[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TEmpresesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TEmpreses::class);
    }

    // /**
    //  * @return TEmpreses[] Returns an array of TEmpreses objects
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
    public function findOneBySomeField($value): ?TEmpreses
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
