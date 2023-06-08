<?php

namespace App\Repository;

use App\Entity\Anneepedagogique;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Anneepedagogique>
 *
 * @method Anneepedagogique|null find($id, $lockMode = null, $lockVersion = null)
 * @method Anneepedagogique|null findOneBy(array $criteria, array $orderBy = null)
 * @method Anneepedagogique[]    findAll()
 * @method Anneepedagogique[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AnneepedagogiqueRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Anneepedagogique::class);
    }

    public function add(Anneepedagogique $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Anneepedagogique $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Anneepedagogique[] Returns an array of Anneepedagogique objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('a.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Anneepedagogique
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
