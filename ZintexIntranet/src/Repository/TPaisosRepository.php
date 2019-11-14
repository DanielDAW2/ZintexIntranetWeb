<?php

namespace App\Repository;

use App\Entity\TPaisos;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method TPaisos|null find($id, $lockMode = null, $lockVersion = null)
 * @method TPaisos|null findOneBy(array $criteria, array $orderBy = null)
 * @method TPaisos[]    findAll()
 * @method TPaisos[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TPaisosRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TPaisos::class);
    }

    // /**
    //  * @return TPaisos[] Returns an array of TPaisos objects
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
    public function findOneBySomeField($value): ?TPaisos
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
