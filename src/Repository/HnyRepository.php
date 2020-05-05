<?php

namespace App\Repository;

use App\Entity\Hny;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Hny|null find($id, $lockMode = null, $lockVersion = null)
 * @method Hny|null findOneBy(array $criteria, array $orderBy = null)
 * @method Hny[]    findAll()
 * @method Hny[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HnyRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Hny::class);
    }

    // /**
    //  * @return Hny[] Returns an array of Hny objects
    //  */
    public function findByIsocode($value)
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.isocode = :val')
            ->setParameter('val', $value)
            ->orderBy('h.id', 'ASC')
            ->getQuery()
            ->getResult()
        ;
    }

    // /**
    //  * @return Hny[] Returns an array of Hny objects
    //  */
    /*
    public function findByExampleField($value)
    {
    return $this->createQueryBuilder('h')
    ->andWhere('h.exampleField = :val')
    ->setParameter('val', $value)
    ->orderBy('h.id', 'ASC')
    ->setMaxResults(10)
    ->getQuery()
    ->getResult()
    ;
    }
     */

    /*
public function findOneBySomeField($value): ?Hny
{
return $this->createQueryBuilder('h')
->andWhere('h.exampleField = :val')
->setParameter('val', $value)
->getQuery()
->getOneOrNullResult()
;
}
 */
}
