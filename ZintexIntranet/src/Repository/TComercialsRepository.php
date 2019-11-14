<?php

namespace App\Repository;

use App\Entity\TComercials;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method TComercials|null find($id, $lockMode = null, $lockVersion = null)
 * @method TComercials|null findOneBy(array $criteria, array $orderBy = null)
 * @method TComercials[]    findAll()
 * @method TComercials[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TComercialsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TComercials::class);
    }

    // /**
    //  * @return TComercials[] Returns an array of TComercials objects
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
    public function findOneBySomeField($value): ?TComercials
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
