<?php

namespace App\Repository;

use App\Entity\TPresupVto;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method TPresupVto|null find($id, $lockMode = null, $lockVersion = null)
 * @method TPresupVto|null findOneBy(array $criteria, array $orderBy = null)
 * @method TPresupVto[]    findAll()
 * @method TPresupVto[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TPresupVtoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TPresupVto::class);
    }

    // /**
    //  * @return TPresupVto[] Returns an array of TPresupVto objects
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
    public function findOneBySomeField($value): ?TPresupVto
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
