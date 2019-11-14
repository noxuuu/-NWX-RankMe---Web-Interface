<?php
/**
 * Created by PhpStorm.
 * User: Patryk Szczepanski
 * Date: 10/11/2019
 * Time: 04:12
 */

namespace App\Repository;

use Doctrine\ORM\EntityRepository;

class StatsRepository extends EntityRepository
{
    /**
     * Retrieves number of rows
     * @return mixed
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function countAllPlayers()
    {
        $qb = $this->createQueryBuilder('s');
        $qb->select('count(DISTINCT s.playerId) AS counter');
        $query = $qb->getQuery();
        return $query->getSingleScalarResult();
    }
    /**
     * Retrieves number of rows
     * @return mixed
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function getHeadshots()
    {
        $qb = $this->createQueryBuilder('s');
        $qb->select('SUM(s.headshots)');
        $query = $qb->getQuery();
        return $query->getSingleScalarResult();
    }

    /**
     * Retrieves weapons stats in order
     * @param $id
     * @return array
     */
    public function getWeaponStats($id)
    {
        $qb = $this->createQueryBuilder('s');
        $qb->select('s.knife, s.glock, s.hkp2000, s.usp, s.p250, s.deagle, s.elite, s.fiveseven, s.tec9, s.cz75a, s.revolver, s.nova, s.xm1014, s.mag7, s.sawedoff, s.bizon, s.mac10, s.mp9, s.mp7, s.ump45, s.p90, s.galilar, s.ak47, s.scar20, s.famas, s.m4a1, s.m4a1_silencer, s.aug, s.ssg08, s.sg556, s.awp, s.g3sg1, s.m249, s.negev, s.hegrenade, s.flashbang, s.smokegrenade, s.inferno, s.decoy, s.taser, s.mp5sd')
            ->where('s.id = :id')
            ->setParameter('id', $id);
        $query = $qb->getQuery();
        $weapons = $query->getArrayResult();
        arsort($weapons[0]);
        return $weapons[0];
    }
}