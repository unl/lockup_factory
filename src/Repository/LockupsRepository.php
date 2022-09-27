<?php

namespace App\Repository;

use App\Entity\Lockups;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Lockups|null find($id, $lockMode = null, $lockVersion = null)
 * @method Lockups|null findOneBy(array $criteria, array $orderBy = null)
 * @method Lockups[]    findAll()
 * @method Lockups[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LockupsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Lockups::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(Lockups $entity, bool $flush = true): void
    {
        $this->_em->persist($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function remove(Lockups $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * @return Lockups[] Returns an array of LockupsFields objects
     */
    public function searchNames(string $value): array
    {
        $searchArr = [];

        $entityManager = $this->getEntityManager();

        $institutionQuery = $entityManager->createQuery(
            'SELECT p
            FROM App\Entity\Lockups p
            WHERE p.institution LIKE :value
            OR 
            p.department LIKE :value
            ORDER BY p.institution ASC'
        )->setParameter('value', '%' . $value . '%');

        // returns an array of Product objects
        return $institutionQuery->getResult();
    }

    /**
     * @return Lockups[] Returns an array of Lockups objects
     */
    public function pendingApprover(int $id = 0): array
    {
        $entityManager = $this->getEntityManager();
        if ($id == 0 ) {
            $query = $entityManager->createQuery(
                'SELECT p
                FROM App\Entity\Lockups p
                WHERE p.CreativeStatus = 0
                ORDER BY p.DateCreated DESC'
            );
        } else {
            $query = $entityManager->createQuery(
                'SELECT p
                FROM App\Entity\Lockups p
                WHERE p.CommunicatorStatus = 0
                AND
                p.approver = :id
                ORDER BY p.DateCreated DESC'
            )->setParameter('id', $id);
        }

        // returns an array of Product objects
        return $query->getResult();
    }

    /**
     * @return Lockups[] Returns an array of Lockups objects
     */
    public function pendingCreative(): array
    {
        $entityManager = $this->getEntityManager();
        $query = $entityManager->createQuery(
            'SELECT p
            FROM App\Entity\Lockups p
            WHERE p.CreativeStatus = 0
            ORDER BY p.DateCreated DESC'
        );

        // returns an array of Product objects
        return $query->getResult();
    }

    // /**
    //  * @return Lockups[] Returns an array of Lockups objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Lockups
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
