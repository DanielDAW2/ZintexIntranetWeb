<?php

namespace App\Repository;

use App\Entity\TFacturaVto;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method TFacturaVto|null find($id, $lockMode = null, $lockVersion = null)
 * @method TFacturaVto|null findOneBy(array $criteria, array $orderBy = null)
 * @method TFacturaVto[]    findAll()
 * @method TFacturaVto[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TFacturaVtoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TFacturaVto::class);
    }

    // /**
    //  * @return TFacturaVto[] Returns an array of TFacturaVto objects
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
    public function findOneBySomeField($value): ?TFacturaVto
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
