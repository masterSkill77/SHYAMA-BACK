<?php

namespace App\Repository;

use App\Entity\ImageSliders;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ImageSliders>
 *
 * @method ImageSliders|null find($id, $lockMode = null, $lockVersion = null)
 * @method ImageSliders|null findOneBy(array $criteria, array $orderBy = null)
 * @method ImageSliders[]    findAll()
 * @method ImageSliders[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ImageSlidersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ImageSliders::class);
    }

//    /**
//     * @return ImageSliders[] Returns an array of ImageSliders objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('i.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ImageSliders
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
