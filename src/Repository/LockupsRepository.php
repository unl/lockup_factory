<?php

namespace App\Repository;

use App\Entity\Lockups;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Query\Parameter;

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
    public function searchNames(string $value, int $id = null): array
    {
        $searchArr = [];

        $entityManager = $this->getEntityManager();

        if ($id != null) {
            $institutionQuery = $entityManager->createQuery(
                'SELECT p
                FROM App\Entity\Lockups p
                WHERE p.institution LIKE :value
                OR 
                p.name LIKE :value
                AND
                p.user = :id
                ORDER BY p.name ASC'
            )->setParameters(new ArrayCollection([
                new Parameter('value', '%' . $value . '%'),
                new Parameter('id', $id)
            ]));
        }
        else {
            $institutionQuery = $entityManager->createQuery(
                'SELECT p
                FROM App\Entity\Lockups p
                WHERE p.institution LIKE :value
                OR 
                p.name LIKE :value
                ORDER BY p.name ASC'
            )->setParameter('value', '%' . $value . '%');
        }

        // returns an array of Product objects
        return $institutionQuery->getResult();
    }

    /**
     * @return Lockups[] Returns an array of Lockups objects
     */
    public function pendingApprover(int $id = 0): array
    {
        $entityManager = $this->getEntityManager();
        $today = new \DateTime();
        $lastDate = new \DateTime();
        $lastDate->modify('-30 day');
        if ($id == 0) {
            $query = $entityManager->createQuery(
                'SELECT p
                FROM App\Entity\Lockups p
                WHERE (p.CommunicatorStatus = 0
                AND
                p.CreativeStatus != 2)
                AND
                p.DateCreated between :lastDate AND :today
                ORDER BY p.DateCreated DESC'
            )->setParameters(new ArrayCollection([
                new Parameter('lastDate', $lastDate),
                new Parameter('today', $today)
            ]));

        }
        else {
            $query = $entityManager->createQuery(
                'SELECT p
                FROM App\Entity\Lockups p
                WHERE (p.CommunicatorStatus = 0
                AND
                p.CreativeStatus != 2)
                AND
                p.approver = :id
                AND
                p.DateCreated between :lastDate AND :today
                ORDER BY p.DateCreated DESC'
            )->setParameters(new ArrayCollection([
                new Parameter('lastDate', $lastDate),
                new Parameter('today', $today),
                new Parameter('id', $id)
            ]));
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
        $today = new \DateTime();
        $lastDate = new \DateTime();
        $lastDate->modify('-30 day');
        $query = $entityManager->createQuery(
            'SELECT p
            FROM App\Entity\Lockups p
            WHERE (p.CreativeStatus = 0
            AND
            p.CommunicatorStatus = 1)
            AND
            p.DateCreated between :lastDate AND :today
            ORDER BY p.DateCreated DESC'
        )->setParameters(new ArrayCollection([
            new Parameter('lastDate', $lastDate),
            new Parameter('today', $today)
        ]));

        // returns an array of Product objects
        return $query->getResult();
    }

    /**
     * @return Lockups[] Returns an array of Lockups objects
     */
    public function dailyDigestApprover($approver): array
    {
        $entityManager = $this->getEntityManager();
        $today = new \DateTime();
        $lastDate = new \DateTime();
        $lastDate->modify('-24 hour');
        $query = $entityManager->createQuery(
            'SELECT p
                FROM App\Entity\Lockups p
                WHERE (p.CommunicatorStatus = 0
                AND
                p.CreativeStatus != 2)
                AND
                p.approver = :approver
                AND
                p.DateCreated between :lastDate AND :today
                ORDER BY p.DateCreated DESC'
        )->setParameters(new ArrayCollection([
            new Parameter('lastDate', $lastDate),
            new Parameter('today', $today),
            new Parameter('approver', $approver)
        ]));


        // returns an array of Product objects
        return $query->getResult();
    }

    /**
     * @return Lockups[] Returns an array of Lockups objects
     */
    public function dailyDigestCreative(): array
    {
        $entityManager = $this->getEntityManager();
        $today = new \DateTime();
        $lastDate = new \DateTime();
        $lastDate->modify('-24 hour');
        $query = $entityManager->createQuery(
            'SELECT p
                FROM App\Entity\Lockups p
                WHERE (p.CreativeStatus = 0
                AND
                p.CommunicatorStatus = 1)
                AND
                p.DateCreated between :lastDate AND :today
                ORDER BY p.DateCreated DESC'
        )->setParameters(new ArrayCollection([
            new Parameter('lastDate', $lastDate),
            new Parameter('today', $today)
        ]));


        // returns an array of Product objects
        return $query->getResult();
    }

    /**
     * @return Lockups[] Returns an array of Lockups objects
     */
    public function dailyDigestPendingLockups(): array
    {
        // get lockups older than 30 days that have not been approved yet
        $entityManager = $this->getEntityManager();
        $lastDate = new \DateTime();
        $lastDate->modify('-24 hour');
        $query = $entityManager->createQuery(
            'SELECT p
                FROM App\Entity\Lockups p
                WHERE
                p.DateCreated < :lastDate
                AND
                p.CommunicatorStatus = 0
                OR
                p.CreativeStatus = 0
                ORDER BY p.DateCreated DESC'
        )->setParameters(new ArrayCollection([
            new Parameter('lastDate', $lastDate)
        ]));


        // returns an array of Product objects
        return $query->getResult();
    }

    /**
     * @return Lockups[] Returns an array of Lockups objects
     */
    public function deniedUserLockups(int $userID): array
    {
        $entityManager = $this->getEntityManager();
        $query = $entityManager->createQuery(
            'SELECT p
            FROM App\Entity\Lockups p
            WHERE (p.CreativeStatus = 2
            OR
            p.CommunicatorStatus = 2)
            AND
            p.user = :userID
            ORDER BY p.DateCreated DESC'
        )->setParameters(new ArrayCollection([
            new Parameter('userID', $userID)
        ]));

        // returns an array of Product objects
        return $query->getResult();
    }

    /**
     * @return Lockups[] Returns an array of Lockups objects
     */
    public function pendingUserLockups(int $userID): array
    {
        $entityManager = $this->getEntityManager();
        $query = $entityManager->createQuery(
            'SELECT p
            FROM App\Entity\Lockups p
            WHERE (p.CreativeStatus = 0
            OR
            p.CommunicatorStatus = 0)
            AND
            (p.CreativeStatus != 2
            OR
            p.CommunicatorStatus != 2)
            AND
            p.user = :userID
            ORDER BY p.DateCreated DESC'
        )->setParameters(new ArrayCollection([
            new Parameter('userID', $userID)
        ]));

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
