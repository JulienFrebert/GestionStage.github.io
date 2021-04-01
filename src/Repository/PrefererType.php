<?php

namespace App\Repository;

use App\Entity\Preferer;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Preferer|null find($id, $lockMode = null, $lockVersion = null)
 * @method Preferer|null findOneBy(array $criteria, array $orderBy = null)
 * @method Preferer[]    findAll()
 * @method Preferer[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PrefererType extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Preferer::class);
    }

    // /**
    //  * @return Preferer[] Returns an array of Preferer objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Preferer
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
