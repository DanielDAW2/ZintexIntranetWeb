<?php

namespace App\Repository;

use App\Entity\TProductesProv;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method TProductesProv|null find($id, $lockMode = null, $lockVersion = null)
 * @method TProductesProv|null findOneBy(array $criteria, array $orderBy = null)
 * @method TProductesProv[]    findAll()
 * @method TProductesProv[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TProductesProvRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TProductesProv::class);
    }

    // /**
    //  * @return TProductesProv[] Returns an array of TProductesProv objects
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
    public function findOneBySomeField($value): ?TProductesProv
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
