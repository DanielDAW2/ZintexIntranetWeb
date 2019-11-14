<?php

namespace App\Repository;

use App\Entity\TFitxersTarifesEsp;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method TFitxersTarifesEsp|null find($id, $lockMode = null, $lockVersion = null)
 * @method TFitxersTarifesEsp|null findOneBy(array $criteria, array $orderBy = null)
 * @method TFitxersTarifesEsp[]    findAll()
 * @method TFitxersTarifesEsp[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TFitxersTarifesEspRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TFitxersTarifesEsp::class);
    }

    // /**
    //  * @return TFitxersTarifesEsp[] Returns an array of TFitxersTarifesEsp objects
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
    public function findOneBySomeField($value): ?TFitxersTarifesEsp
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
