<?php

namespace App\Repository;

use App\Entity\TObservPlazoEntrega;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method TObservPlazoEntrega|null find($id, $lockMode = null, $lockVersion = null)
 * @method TObservPlazoEntrega|null findOneBy(array $criteria, array $orderBy = null)
 * @method TObservPlazoEntrega[]    findAll()
 * @method TObservPlazoEntrega[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TObservPlazoEntregaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TObservPlazoEntrega::class);
    }

    // /**
    //  * @return TObservPlazoEntrega[] Returns an array of TObservPlazoEntrega objects
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
    public function findOneBySomeField($value): ?TObservPlazoEntrega
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
