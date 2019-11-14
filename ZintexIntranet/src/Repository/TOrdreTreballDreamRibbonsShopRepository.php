<?php

namespace App\Repository;

use App\Entity\TOrdreTreballDreamRibbonsShop;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method TOrdreTreballDreamRibbonsShop|null find($id, $lockMode = null, $lockVersion = null)
 * @method TOrdreTreballDreamRibbonsShop|null findOneBy(array $criteria, array $orderBy = null)
 * @method TOrdreTreballDreamRibbonsShop[]    findAll()
 * @method TOrdreTreballDreamRibbonsShop[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TOrdreTreballDreamRibbonsShopRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TOrdreTreballDreamRibbonsShop::class);
    }

    // /**
    //  * @return TOrdreTreballDreamRibbonsShop[] Returns an array of TOrdreTreballDreamRibbonsShop objects
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
    public function findOneBySomeField($value): ?TOrdreTreballDreamRibbonsShop
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
