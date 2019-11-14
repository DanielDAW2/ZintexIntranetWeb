<?php

namespace App\Repository;

use App\Entity\TComandaProvAux;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method TComandaProvAux|null find($id, $lockMode = null, $lockVersion = null)
 * @method TComandaProvAux|null findOneBy(array $criteria, array $orderBy = null)
 * @method TComandaProvAux[]    findAll()
 * @method TComandaProvAux[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TComandaProvAuxRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TComandaProvAux::class);
    }

    // /**
    //  * @return TComandaProvAux[] Returns an array of TComandaProvAux objects
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
    public function findOneBySomeField($value): ?TComandaProvAux
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
