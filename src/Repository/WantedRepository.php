<?php

namespace App\Repository;

use App\Entity\Wanted;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Wanted|null find($id, $lockMode = null, $lockVersion = null)
 * @method Wanted|null findOneBy(array $criteria, array $orderBy = null)
 * @method Wanted[]    findAll()
 * @method Wanted[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WantedRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Wanted::class);
    }

    // /**
    //  * @return Wanted[] Returns an array of Wanted objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('w.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Wanted
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
