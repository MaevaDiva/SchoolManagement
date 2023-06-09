<?php

namespace App\Repository;

use App\Entity\CompteurnumeroInscription;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CompteurnumeroInscription>
 *
 * @method CompteurnumeroInscription|null find($id, $lockMode = null, $lockVersion = null)
 * @method CompteurnumeroInscription|null findOneBy(array $criteria, array $orderBy = null)
 * @method CompteurnumeroInscription[]    findAll()
 * @method CompteurnumeroInscription[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CompteurnumeroInscriptionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CompteurnumeroInscription::class);
    }

    public function add(CompteurnumeroInscription $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(CompteurnumeroInscription $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return CompteurnumeroInscription[] Returns an array of CompteurnumeroInscription objects
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

//    public function findOneBySomeField($value): ?CompteurnumeroInscription
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
