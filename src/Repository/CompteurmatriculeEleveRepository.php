<?php

namespace App\Repository;

use App\Entity\CompteurmatriculeEleve;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CompteurmatriculeEleve>
 *
 * @method CompteurmatriculeEleve|null find($id, $lockMode = null, $lockVersion = null)
 * @method CompteurmatriculeEleve|null findOneBy(array $criteria, array $orderBy = null)
 * @method CompteurmatriculeEleve[]    findAll()
 * @method CompteurmatriculeEleve[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CompteurmatriculeEleveRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CompteurmatriculeEleve::class);
    }

    public function add(CompteurmatriculeEleve $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(CompteurmatriculeEleve $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return CompteurmatriculeEleve[] Returns an array of CompteurmatriculeEleve objects
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

//    public function findOneBySomeField($value): ?CompteurmatriculeEleve
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
