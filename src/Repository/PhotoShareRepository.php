<?php

namespace App\Repository;

use App\Entity\PhotoShare;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method PhotoShare|null find($id, $lockMode = null, $lockVersion = null)
 * @method PhotoShare|null findOneBy(array $criteria, array $orderBy = null)
 * @method PhotoShare[]    findAll()
 * @method PhotoShare[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PhotoShareRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PhotoShare::class);
    }

    // /**
    //  * @return PhotoShare[] Returns an array of PhotoShare objects
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
    public function findOneBySomeField($value): ?PhotoShare
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
