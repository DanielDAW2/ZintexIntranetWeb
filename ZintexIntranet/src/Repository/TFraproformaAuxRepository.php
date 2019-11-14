<?php

namespace App\Repository;

use App\Entity\TFraproformaAux;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method TFraproformaAux|null find($id, $lockMode = null, $lockVersion = null)
 * @method TFraproformaAux|null findOneBy(array $criteria, array $orderBy = null)
 * @method TFraproformaAux[]    findAll()
 * @method TFraproformaAux[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TFraproformaAuxRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TFraproformaAux::class);
    }

    // /**
    //  * @return TFraproformaAux[] Returns an array of TFraproformaAux objects
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
    public function findOneBySomeField($value): ?TFraproformaAux
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
