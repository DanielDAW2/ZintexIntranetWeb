<?php

namespace App\Repository;

use App\Entity\TFacturaVtoAux;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method TFacturaVtoAux|null find($id, $lockMode = null, $lockVersion = null)
 * @method TFacturaVtoAux|null findOneBy(array $criteria, array $orderBy = null)
 * @method TFacturaVtoAux[]    findAll()
 * @method TFacturaVtoAux[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TFacturaVtoAuxRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TFacturaVtoAux::class);
    }

    // /**
    //  * @return TFacturaVtoAux[] Returns an array of TFacturaVtoAux objects
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
    public function findOneBySomeField($value): ?TFacturaVtoAux
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
