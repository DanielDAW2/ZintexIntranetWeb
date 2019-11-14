<?php

namespace App\Repository;

use App\Entity\TParamimp;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method TParamimp|null find($id, $lockMode = null, $lockVersion = null)
 * @method TParamimp|null findOneBy(array $criteria, array $orderBy = null)
 * @method TParamimp[]    findAll()
 * @method TParamimp[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TParamimpRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TParamimp::class);
    }

    // /**
    //  * @return TParamimp[] Returns an array of TParamimp objects
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
    public function findOneBySomeField($value): ?TParamimp
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
