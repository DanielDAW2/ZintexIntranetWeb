<?php

namespace App\Repository;

use App\Entity\TFacturaProvVto;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method TFacturaProvVto|null find($id, $lockMode = null, $lockVersion = null)
 * @method TFacturaProvVto|null findOneBy(array $criteria, array $orderBy = null)
 * @method TFacturaProvVto[]    findAll()
 * @method TFacturaProvVto[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TFacturaProvVtoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TFacturaProvVto::class);
    }

    // /**
    //  * @return TFacturaProvVto[] Returns an array of TFacturaProvVto objects
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
    public function findOneBySomeField($value): ?TFacturaProvVto
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
