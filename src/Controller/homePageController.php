<?php
/**
 * Created by PhpStorm.
 * User: Patryk Szczepanski
 * Date: 10/11/2019
 * Time: 01:17
 */

namespace App\Controller;

use App\Entity\serverEntity;
use App\Entity\userEntity;
use App\Entity\userStats;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class homePageController extends AbstractController
{
    /**
     * Get common of Web Interface
     *
     * @Route("/", name="homePage")
     * @return \Symfony\Component\HttpFoundation\Response
     * @throws \Exception
     */
    public function homePage()
    {
        $serversRepo = $this->getDoctrine()->getRepository(serverEntity::class);
        $statsRepo = $this->getDoctrine()->getRepository(userStats::class);
        $playersRepo = $this->getDoctrine()->getRepository(userEntity::class);

        $servers = $serversRepo->findAll();
        $stats = $statsRepo->findBy(array(), array('score' => 'DESC'), 10);

        $stats_boxes = array();
        $stats_boxes['players_all'] = $statsRepo->countAllPlayers();
        $stats_boxes['players_24'] = $playersRepo->countLast24hPlayers();
        $stats_boxes['players_headshots'] = $statsRepo->getHeadshots();

        // there will be some content..
        return $this->render('frontend/homepage/index.html.twig', [
            'servers' => $servers,
            'stats' => $stats,
            'stats_boxes' => $stats_boxes
        ]);
    }
}