<?php

namespace App\Repository;

use App\Entity\TObservPresup;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method TObservPresup|null find($id, $lockMode = null, $lockVersion = null)
 * @method TObservPresup|null findOneBy(array $criteria, array $orderBy = null)
 * @method TObservPresup[]    findAll()
 * @method TObservPresup[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TObservPresupRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TObservPresup::class);
    }

    // /**
    //  * @return TObservPresup[] Returns an array of TObservPresup objects
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
    public function findOneBySomeField($value): ?TObservPresup
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
