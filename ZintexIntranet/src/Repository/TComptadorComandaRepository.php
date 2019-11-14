<?php

namespace App\Repository;

use App\Entity\TComptadorComanda;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method TComptadorComanda|null find($id, $lockMode = null, $lockVersion = null)
 * @method TComptadorComanda|null findOneBy(array $criteria, array $orderBy = null)
 * @method TComptadorComanda[]    findAll()
 * @method TComptadorComanda[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TComptadorComandaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TComptadorComanda::class);
    }

    // /**
    //  * @return TComptadorComanda[] Returns an array of TComptadorComanda objects
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
    public function findOneBySomeField($value): ?TComptadorComanda
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
