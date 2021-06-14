<?php

namespace App\Repository;

use App\Entity\Nut;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Nut|null find($id, $lockMode = null, $lockVersion = null)
 * @method Nut|null findOneBy(array $criteria, array $orderBy = null)
 * @method Nut[]    findAll()
 * @method Nut[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NutRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Nut::class);
    }

    // /**
    //  * @return Nut[] Returns an array of Nut objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('n.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Nut
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
