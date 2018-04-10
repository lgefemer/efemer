<?php

namespace App\Repository;

use App\Entity\Wup;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Wup|null find($id, $lockMode = null, $lockVersion = null)
 * @method Wup|null findOneBy(array $criteria, array $orderBy = null)
 * @method Wup[]    findAll()
 * @method Wup[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WupRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Wup::class);
    }

//    /**
//     * @return Wup[] Returns an array of Wup objects
//     */
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
    public function findOneBySomeField($value): ?Wup
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
