<?php

namespace App\Repository;

use App\Entity\TPreciosCantidad;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method TPreciosCantidad|null find($id, $lockMode = null, $lockVersion = null)
 * @method TPreciosCantidad|null findOneBy(array $criteria, array $orderBy = null)
 * @method TPreciosCantidad[]    findAll()
 * @method TPreciosCantidad[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TPreciosCantidadRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TPreciosCantidad::class);
    }

    // /**
    //  * @return TPreciosCantidad[] Returns an array of TPreciosCantidad objects
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
    public function findOneBySomeField($value): ?TPreciosCantidad
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
