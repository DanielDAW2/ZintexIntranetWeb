<?php

namespace App\Repository;

use App\Entity\TAlbara;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\Tools\Pagination\Paginator;

/**
 * @method TAlbara|null find($id, $lockMode = null, $lockVersion = null)
 * @method TAlbara|null findOneBy(array $criteria, array $orderBy = null)
 * @method TAlbara[]    findAll()
 * @method TAlbara[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TAlbaraRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TAlbara::class);
    }

    public function paginate($query, $page, $limit)
    {
        $paginator = new Paginator($query);
        $paginator->getQuery()
            ->setFirstResult($limit * ($page - 1)) // Offset
            ->setMaxResults($limit); // Limit

        return $paginator;
    }

    public function getAlbaraPaginated($filters, $limit)
    {
        $query = $this->createQueryBuilder("cli")
            ->select()
            ->orderBy("cli.idAlbara", "DESC")
            ->getQuery();

        $paginator = $this->paginate($query, $filters["page"], $limit);

        return ["paginator" => $paginator, "query" => $query];
    }

    // /**
    //  * @return TAlbara[] Returns an array of TAlbara objects
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
    public function findOneBySomeField($value): ?TAlbara
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
