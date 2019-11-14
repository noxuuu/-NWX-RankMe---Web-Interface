<?php
/**
 * Created by PhpStorm.
 * User: Patryk Szczepanski
 * Date: 10/11/2019
 * Time: 06:09
 */

namespace App\Controller;

use App\Entity\mapStatsEntity;
use App\Entity\serverEntity;
use App\Entity\userEntity;
use App\Entity\userStats;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Entity;

class userStatsController extends AbstractController
{
    /**
     * Get stats of user
     *
     * @Route("/player/{authData}/stats/{serverName}", name="user_stats")
     * @return \Symfony\Component\HttpFoundation\Response
     * @throws \Exception
     */
    public function usersStats($authData, $serverName)
    {
        $userRepository = $this->getDoctrine()->getRepository(userEntity::class);
        $serversRepository = $this->getDoctrine()->getRepository(serverEntity::class);
        $statsRepository = $this->getDoctrine()->getRepository(userStats::class);
        $mapsRepository = $this->getDoctrine()->getRepository(mapStatsEntity::class);

        if(!$user = $userRepository->findOneBy(['authData' => $authData]))
            throw $this->createNotFoundException('Sorry for that bruh');

        if(!$server = $serversRepository->findOneBy(['name' => $serverName]))
            throw $this->createNotFoundException('Sorry for that bruh');

        if(!$stats = $statsRepository->findOneBy(['playerId' => $user, 'serverId' => $server]))
            throw $this->createNotFoundException('Sorry for that bruh');

        $maps = $mapsRepository->findBy(['playerId' => $user, 'serverId' => $server], ['played' => 'DESC']);
        $_weapons = $statsRepository->getWeaponStats($user->getId());

        $usersStats = $statsRepository->findBy(['serverId' => $server], array('score' => 'DESC'));

        $index = 0;
        foreach ($usersStats as $usersStat) {
            $index++;
            if($usersStat == $stats)
            {
                $userIndex = $index;
                break;
            }
        }

        // transform weapon array
        $weapons = array();
        foreach($_weapons as $key => $value)
            array_push($weapons, ['name' => $key, 'value' => $value]);

        return $this->render('frontend/user_stats/index.html.twig', [
            'user' => $user,
            'stats' => $stats,
            'maps' => $maps,
            'weapons' => $weapons,
            'servers' => $serversRepository->findAll(),
            'users' => $usersStats,
            'index' => $userIndex
        ]);
    }
}