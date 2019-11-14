<?php

namespace App\Repository;

use App\Entity\TClients;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method TClients|null find($id, $lockMode = null, $lockVersion = null)
 * @method TClients|null findOneBy(array $criteria, array $orderBy = null)
 * @method TClients[]    findAll()
 * @method TClients[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TClientsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TClients::class);
    }

    // /**
    //  * @return TClients[] Returns an array of TClients objects
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
    public function findOneBySomeField($value): ?TClients
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
