<?php

namespace App\Repository;

use App\Entity\TFraproformaVto;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method TFraproformaVto|null find($id, $lockMode = null, $lockVersion = null)
 * @method TFraproformaVto|null findOneBy(array $criteria, array $orderBy = null)
 * @method TFraproformaVto[]    findAll()
 * @method TFraproformaVto[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TFraproformaVtoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TFraproformaVto::class);
    }

    // /**
    //  * @return TFraproformaVto[] Returns an array of TFraproformaVto objects
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
    public function findOneBySomeField($value): ?TFraproformaVto
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
