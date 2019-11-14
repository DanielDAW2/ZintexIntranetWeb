<?php

namespace App\Repository;

use App\Entity\TAlbaraAux;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method TAlbaraAux|null find($id, $lockMode = null, $lockVersion = null)
 * @method TAlbaraAux|null findOneBy(array $criteria, array $orderBy = null)
 * @method TAlbaraAux[]    findAll()
 * @method TAlbaraAux[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TAlbaraAuxRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TAlbaraAux::class);
    }

    // /**
    //  * @return TAlbaraAux[] Returns an array of TAlbaraAux objects
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
    public function findOneBySomeField($value): ?TAlbaraAux
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
