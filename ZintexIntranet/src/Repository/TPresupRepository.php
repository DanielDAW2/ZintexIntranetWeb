<?php

namespace App\Repository;

use App\Entity\TPresup;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method TPresup|null find($id, $lockMode = null, $lockVersion = null)
 * @method TPresup|null findOneBy(array $criteria, array $orderBy = null)
 * @method TPresup[]    findAll()
 * @method TPresup[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TPresupRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TPresup::class);
    }

    // /**
    //  * @return TPresup[] Returns an array of TPresup objects
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
    public function findOneBySomeField($value): ?TPresup
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
