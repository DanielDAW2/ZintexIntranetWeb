<?php

namespace App\Repository;

use App\Entity\TEmpresesPath;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method TEmpresesPath|null find($id, $lockMode = null, $lockVersion = null)
 * @method TEmpresesPath|null findOneBy(array $criteria, array $orderBy = null)
 * @method TEmpresesPath[]    findAll()
 * @method TEmpresesPath[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TEmpresesPathRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TEmpresesPath::class);
    }

    // /**
    //  * @return TEmpresesPath[] Returns an array of TEmpresesPath objects
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
    public function findOneBySomeField($value): ?TEmpresesPath
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
