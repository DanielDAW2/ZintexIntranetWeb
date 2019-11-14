<?php

namespace App\Repository;

use App\Entity\TObservProforma;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method TObservProforma|null find($id, $lockMode = null, $lockVersion = null)
 * @method TObservProforma|null findOneBy(array $criteria, array $orderBy = null)
 * @method TObservProforma[]    findAll()
 * @method TObservProforma[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TObservProformaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TObservProforma::class);
    }

    // /**
    //  * @return TObservProforma[] Returns an array of TObservProforma objects
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
    public function findOneBySomeField($value): ?TObservProforma
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
