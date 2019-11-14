<?php

namespace App\Repository;

use App\Entity\TFacturaAux;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method TFacturaAux|null find($id, $lockMode = null, $lockVersion = null)
 * @method TFacturaAux|null findOneBy(array $criteria, array $orderBy = null)
 * @method TFacturaAux[]    findAll()
 * @method TFacturaAux[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TFacturaAuxRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TFacturaAux::class);
    }

    // /**
    //  * @return TFacturaAux[] Returns an array of TFacturaAux objects
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
    public function findOneBySomeField($value): ?TFacturaAux
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
