<?php

namespace App\Repository;

use App\Entity\TOrdreTreball;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\Tools\Pagination\Paginator;

/**
 * @method TOrdreTreball|null find($id, $lockMode = null, $lockVersion = null)
 * @method TOrdreTreball|null findOneBy(array $criteria, array $orderBy = null)
 * @method TOrdreTreball[]    findAll()
 * @method TOrdreTreball[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TOrdreTreballRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TOrdreTreball::class);
    }

    public function paginate($query, $page, $limit)
    {
        $paginator = new Paginator($query);
        $paginator->getQuery()
            ->setFirstResult($limit * ($page - 1)) // Offset
            ->setMaxResults($limit); // Limit

        return $paginator;
    }

    public function getOrdresPaginated($filters, $limit)
    {
        $query = $this->createQueryBuilder("od")
            ->select()
            ->orderBy("od.idOrdre", "DESC")
            ->getQuery();

        $paginator = $this->paginate($query, $filters["page"], $limit);

        return ["paginator" => $paginator, "query" => $query];
    }

    // /**
    //  * @return TOrdreTreball[] Returns an array of TOrdreTreball objects
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
    public function findOneBySomeField($value): ?TOrdreTreball
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
