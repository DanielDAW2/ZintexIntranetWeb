<?php

namespace App\Repository;

use App\Entity\TGrupGral;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method TGrupGral|null find($id, $lockMode = null, $lockVersion = null)
 * @method TGrupGral|null findOneBy(array $criteria, array $orderBy = null)
 * @method TGrupGral[]    findAll()
 * @method TGrupGral[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TGrupGralRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TGrupGral::class);
    }

    // /**
    //  * @return TGrupGral[] Returns an array of TGrupGral objects
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
    public function findOneBySomeField($value): ?TGrupGral
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
