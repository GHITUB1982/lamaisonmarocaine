<?php

namespace App\Repository;

use App\Entity\Reglementation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Reglementation|null find($id, $lockMode = null, $lockVersion = null)
 * @method Reglementation|null findOneBy(array $criteria, array $orderBy = null)
 * @method Reglementation[]    findAll()
 * @method Reglementation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReglementationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reglementation::class);
    }

    // Méthode corrigée pour trouver les réglementations visibles
public function findByIsView(bool $isView = true): array
{
    return $this->createQueryBuilder('r')
        ->andWhere('r.isView = :isView')
        ->setParameter('isView', $isView)
        ->orderBy('r.createdAt', 'DESC')
        ->getQuery()
        ->getResult();
}
    // Méthode alternative avec findBy()
    public function findVisibleSimple(): array
    {
        return $this->findBy(
            ['isView' => true],
            ['createdAt' => 'DESC']
        );
    }
}