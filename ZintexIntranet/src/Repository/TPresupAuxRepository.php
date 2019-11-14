<?php

namespace App\Repository;

use App\Entity\TPresupAux;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method TPresupAux|null find($id, $lockMode = null, $lockVersion = null)
 * @method TPresupAux|null findOneBy(array $criteria, array $orderBy = null)
 * @method TPresupAux[]    findAll()
 * @method TPresupAux[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TPresupAuxRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TPresupAux::class);
    }

    // /**
    //  * @return TPresupAux[] Returns an array of TPresupAux objects
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
    public function findOneBySomeField($value): ?TPresupAux
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
