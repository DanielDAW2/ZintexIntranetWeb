<?php

namespace App\Repository;

use App\Entity\TFraproformaPlazos;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method TFraproformaPlazos|null find($id, $lockMode = null, $lockVersion = null)
 * @method TFraproformaPlazos|null findOneBy(array $criteria, array $orderBy = null)
 * @method TFraproformaPlazos[]    findAll()
 * @method TFraproformaPlazos[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TFraproformaPlazosRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TFraproformaPlazos::class);
    }

    // /**
    //  * @return TFraproformaPlazos[] Returns an array of TFraproformaPlazos objects
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
    public function findOneBySomeField($value): ?TFraproformaPlazos
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
