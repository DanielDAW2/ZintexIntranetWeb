<?php

namespace App\Repository;

use App\Entity\TInstrumentPagProv;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method TInstrumentPagProv|null find($id, $lockMode = null, $lockVersion = null)
 * @method TInstrumentPagProv|null findOneBy(array $criteria, array $orderBy = null)
 * @method TInstrumentPagProv[]    findAll()
 * @method TInstrumentPagProv[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TInstrumentPagProvRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TInstrumentPagProv::class);
    }

    // /**
    //  * @return TInstrumentPagProv[] Returns an array of TInstrumentPagProv objects
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
    public function findOneBySomeField($value): ?TInstrumentPagProv
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
