<?php

namespace App\Repository;

use App\Entity\EditLink;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method EditLink|null find($id, $lockMode = null, $lockVersion = null)
 * @method EditLink|null findOneBy(array $criteria, array $orderBy = null)
 * @method EditLink[]    findAll()
 * @method EditLink[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EditLinkRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, EditLink::class);
    }

    // /**
    //  * @return EditLink[] Returns an array of EditLink objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?EditLink
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
