<?php

namespace App\Repository;

use App\Entity\TAutorComanda;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method TAutorComanda|null find($id, $lockMode = null, $lockVersion = null)
 * @method TAutorComanda|null findOneBy(array $criteria, array $orderBy = null)
 * @method TAutorComanda[]    findAll()
 * @method TAutorComanda[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TAutorComandaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TAutorComanda::class);
    }

    // /**
    //  * @return TAutorComanda[] Returns an array of TAutorComanda objects
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
    public function findOneBySomeField($value): ?TAutorComanda
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
