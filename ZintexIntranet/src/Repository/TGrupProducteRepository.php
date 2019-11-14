<?php

namespace App\Repository;

use App\Entity\TGrupProducte;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method TGrupProducte|null find($id, $lockMode = null, $lockVersion = null)
 * @method TGrupProducte|null findOneBy(array $criteria, array $orderBy = null)
 * @method TGrupProducte[]    findAll()
 * @method TGrupProducte[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TGrupProducteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TGrupProducte::class);
    }

    // /**
    //  * @return TGrupProducte[] Returns an array of TGrupProducte objects
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
    public function findOneBySomeField($value): ?TGrupProducte
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
