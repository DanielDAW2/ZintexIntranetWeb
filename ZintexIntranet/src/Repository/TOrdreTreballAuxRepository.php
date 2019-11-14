<?php

namespace App\Repository;

use App\Entity\TOrdreTreballAux;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method TOrdreTreballAux|null find($id, $lockMode = null, $lockVersion = null)
 * @method TOrdreTreballAux|null findOneBy(array $criteria, array $orderBy = null)
 * @method TOrdreTreballAux[]    findAll()
 * @method TOrdreTreballAux[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TOrdreTreballAuxRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TOrdreTreballAux::class);
    }

    // /**
    //  * @return TOrdreTreballAux[] Returns an array of TOrdreTreballAux objects
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
    public function findOneBySomeField($value): ?TOrdreTreballAux
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
