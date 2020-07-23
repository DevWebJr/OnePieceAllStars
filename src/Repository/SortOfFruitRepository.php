<?php

namespace App\Repository;

use App\Entity\SortOfFruit;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SortOfFruit|null find($id, $lockMode = null, $lockVersion = null)
 * @method SortOfFruit|null findOneBy(array $criteria, array $orderBy = null)
 * @method SortOfFruit[]    findAll()
 * @method SortOfFruit[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SortOfFruitRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SortOfFruit::class);
    }

    // /**
    //  * @return SortOfFruit[] Returns an array of SortOfFruit objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SortOfFruit
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
