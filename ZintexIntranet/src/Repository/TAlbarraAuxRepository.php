<?php

namespace App\Repository;

use App\Entity\TAlbarraAux;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method TAlbarraAux|null find($id, $lockMode = null, $lockVersion = null)
 * @method TAlbarraAux|null findOneBy(array $criteria, array $orderBy = null)
 * @method TAlbarraAux[]    findAll()
 * @method TAlbarraAux[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TAlbarraAuxRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TAlbarraAux::class);
    }

    // /**
    //  * @return TAlbarraAux[] Returns an array of TAlbarraAux objects
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
    public function findOneBySomeField($value): ?TAlbarraAux
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
