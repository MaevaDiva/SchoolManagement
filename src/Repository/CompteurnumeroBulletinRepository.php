<?php

namespace App\Repository;

use App\Entity\CompteurnumeroBulletin;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CompteurnumeroBulletin>
 *
 * @method CompteurnumeroBulletin|null find($id, $lockMode = null, $lockVersion = null)
 * @method CompteurnumeroBulletin|null findOneBy(array $criteria, array $orderBy = null)
 * @method CompteurnumeroBulletin[]    findAll()
 * @method CompteurnumeroBulletin[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CompteurnumeroBulletinRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CompteurnumeroBulletin::class);
    }

    public function add(CompteurnumeroBulletin $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(CompteurnumeroBulletin $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return CompteurnumeroBulletin[] Returns an array of CompteurnumeroBulletin objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?CompteurnumeroBulletin
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
