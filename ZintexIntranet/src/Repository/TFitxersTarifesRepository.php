<?php

namespace App\Repository;

use App\Entity\TFitxersTarifes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method TFitxersTarifes|null find($id, $lockMode = null, $lockVersion = null)
 * @method TFitxersTarifes|null findOneBy(array $criteria, array $orderBy = null)
 * @method TFitxersTarifes[]    findAll()
 * @method TFitxersTarifes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TFitxersTarifesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TFitxersTarifes::class);
    }

    // /**
    //  * @return TFitxersTarifes[] Returns an array of TFitxersTarifes objects
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
    public function findOneBySomeField($value): ?TFitxersTarifes
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
