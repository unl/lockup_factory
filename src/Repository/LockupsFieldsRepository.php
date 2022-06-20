<?php

namespace App\Repository;

use App\Entity\LockupsFields;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method LockupsFields|null find($id, $lockMode = null, $lockVersion = null)
 * @method LockupsFields|null findOneBy(array $criteria, array $orderBy = null)
 * @method LockupsFields[]    findAll()
 * @method LockupsFields[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LockupsFieldsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LockupsFields::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(LockupsFields $entity, bool $flush = true): void
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
    public function remove(LockupsFields $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    // /**
    //  * @return LockupsFields[] Returns an array of LockupsFields objects
    //  */
    // public function search(string $term): array
    // {
    //     $qb = $this->createQueryBuilder('p')
    //         ->where('p.value LIKE :value')
    //         ->setParameter('value', '%'.$term.'%')
    //         ->orderBy('p.value', 'ASC');

    //     $query = $qb->getQuery();
    //     return $query->execute();

    //     // to get just one result:
    //     // $product = $query->setMaxResults(1)->getOneOrNullResult();
    // }

    /**
     * @return LockupsFields[] Returns an array of LockupsFields objects
     */
    public function searchField(string $value): array
    {
        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT p
            FROM App\Entity\LockupsFields p
            WHERE p.value LIKE :value
            ORDER BY p.value ASC'
        )->setParameter('value', '%'.$value.'%');

        // returns an array of Product objects
        return $query->getResult();
    }

    // /**
    //  * @return LockupsFields[] Returns an array of LockupsFields objects
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
    public function findOneBySomeField($value): ?LockupsFields
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
