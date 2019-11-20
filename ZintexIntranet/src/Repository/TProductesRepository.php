<?php

namespace App\Repository;

use App\Entity\TProductes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method TProductes|null find($id, $lockMode = null, $lockVersion = null)
 * @method TProductes|null findOneBy(array $criteria, array $orderBy = null)
 * @method TProductes[]    findAll()
 * @method TProductes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TProductesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TProductes::class);
    }

    public function findProductes(string $index)
    {
        return $this->createQueryBuilder("q")
        ->select("q.idProd as id, q.nomProdCurt as text")
        ->orWhere("q.nomProd LIKE :index")
        ->orWhere("q.nomProd LIKE :index")
        ->setParameter("index","%".$index."%")
        ->getQuery()->getResult();

    }

    // /**
    //  * @return TProductes[] Returns an array of TProductes objects
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
    public function findOneBySomeField($value): ?TProductes
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
