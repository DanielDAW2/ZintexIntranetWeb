<?php

namespace App\Repository;

use App\Entity\TClientsMails;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method TClientsMails|null find($id, $lockMode = null, $lockVersion = null)
 * @method TClientsMails|null findOneBy(array $criteria, array $orderBy = null)
 * @method TClientsMails[]    findAll()
 * @method TClientsMails[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TClientsMailsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TClientsMails::class);
    }

    // /**
    //  * @return TClientsMails[] Returns an array of TClientsMails objects
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
    public function findOneBySomeField($value): ?TClientsMails
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
