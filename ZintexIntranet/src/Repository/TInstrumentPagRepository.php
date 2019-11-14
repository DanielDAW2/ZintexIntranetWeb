<?php

namespace App\Repository;

use App\Entity\TInstrumentPag;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method TInstrumentPag|null find($id, $lockMode = null, $lockVersion = null)
 * @method TInstrumentPag|null findOneBy(array $criteria, array $orderBy = null)
 * @method TInstrumentPag[]    findAll()
 * @method TInstrumentPag[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TInstrumentPagRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TInstrumentPag::class);
    }

    // /**
    //  * @return TInstrumentPag[] Returns an array of TInstrumentPag objects
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
    public function findOneBySomeField($value): ?TInstrumentPag
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
