<?php

namespace App\Repository;

use App\Entity\TComandaProv;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method TComandaProv|null find($id, $lockMode = null, $lockVersion = null)
 * @method TComandaProv|null findOneBy(array $criteria, array $orderBy = null)
 * @method TComandaProv[]    findAll()
 * @method TComandaProv[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TComandaProvRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TComandaProv::class);
    }

    // /**
    //  * @return TComandaProv[] Returns an array of TComandaProv objects
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
    public function findOneBySomeField($value): ?TComandaProv
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
