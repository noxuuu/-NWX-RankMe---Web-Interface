<?php
/**
 * Created by PhpStorm.
 * User: Patryk Szczepanski
 * Date: 10/11/2019
 * Time: 02:37
 */


namespace App\Repository;

use Doctrine\ORM\EntityRepository;

class UsersRepository extends EntityRepository
{
    /**
     * Retrieves players from last 24h
     * @return mixed
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function countLast24hPlayers()
    {
        $date = new \DateTime();
        $qb = $this->createQueryBuilder('u');
        $qb->select('count(DISTINCT u.id) AS counter')
            ->where('u.lastconnect >= :now')
            ->setParameter('now', $date->getTimestamp()-86400);
        $query = $qb->getQuery();
        return $query->getSingleScalarResult();
    }
}