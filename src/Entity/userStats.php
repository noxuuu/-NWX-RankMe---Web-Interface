<?php
/**
 * Created by PhpStorm.
 * User: Patryk Szczepanski
 * Date: 10/11/2019
 * Time: 03:39
 */

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\StatsRepository")
 * @ORM\Table(name="nox_rankme_stats")
 * @UniqueEntity(fields="id")
 */
class userStats
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="userEntity")
     * @ORM\JoinColumn(name="player_id", referencedColumnName="id", nullable=true)
     */
    private $playerId;

    /**
     * @ORM\ManyToOne(targetEntity="serverEntity")
     * @ORM\JoinColumn(name="server_id", referencedColumnName="id", nullable=true)
     */
    private $serverId;

    /**
     * @ORM\Column(type="integer", options={"default": 0})
     */
    private $playerRank;

    /**
     * @ORM\Column(type="integer", options={"default": 0})
     */
    private $score;

    /**
     * @ORM\Column(type="integer", options={"default": 0})
     */
    private $kills;

    /**
     * @ORM\Column(type="integer", options={"default": 0})
     */
    private $deaths;

    /**
     * @ORM\Column(type="integer", options={"default": 0})
     */
    private $assists;

    /**
     * @ORM\Column(type="integer", options={"default": 0})
     */
    private $suicides;

    /**
     * @ORM\Column(type="integer", options={"default": 0})
     */
    private $tk;

    /**
     * @ORM\Column(type="integer", options={"default": 0})
     */
    private $shots;

    /**
     * @ORM\Column(type="integer", options={"default": 0})
     */
    private $hits;

    /**
     * @ORM\Column(type="integer", options={"default": 0})
     */
    private $headshots;

    /**
     * @ORM\Column(type="integer", options={"default": 0})
     */
    private $rounds_tr;

    /**
     * @ORM\Column(type="integer", options={"default": 0})
     */
    private $rounds_ct;

    /**
     * @ORM\Column(type="integer", options={"default": 0})
     */
    private $knife;

    /**
     * @ORM\Column(type="integer", options={"default": 0})
     */
    private $glock;

    /**
     * @ORM\Column(type="integer", options={"default": 0})
     */
    private $hkp2000;

    /**
     * @ORM\Column(type="integer", options={"default": 0})
     */
    private $usp;

    /**
     * @ORM\Column(type="integer", options={"default": 0})
     */
    private $p250;

    /**
     * @ORM\Column(type="integer", options={"default": 0})
     */
    private $deagle;

    /**
     * @ORM\Column(type="integer", options={"default": 0})
     */
    private $elite;

    /**
     * @ORM\Column(type="integer", options={"default": 0})
     */
    private $fiveseven;

    /**
     * @ORM\Column(type="integer", options={"default": 0})
     */
    private $tec9;

    /**
     * @ORM\Column(type="integer", options={"default": 0})
     */
    private $cz75a;

    /**
     * @ORM\Column(type="integer", options={"default": 0})
     */
    private $revolver;

    /**
     * @ORM\Column(type="integer", options={"default": 0})
     */
    private $nova;

    /**
     * @ORM\Column(type="integer", options={"default": 0})
     */
    private $xm1014;

    /**
     * @ORM\Column(type="integer", options={"default": 0})
     */
    private $mag7;

    /**
     * @ORM\Column(type="integer", options={"default": 0})
     */
    private $sawedoff;

    /**
     * @ORM\Column(type="integer", options={"default": 0})
     */
    private $bizon;

    /**
     * @ORM\Column(type="integer", options={"default": 0})
     */
    private $mac10;

    /**
     * @ORM\Column(type="integer", options={"default": 0})
     */
    private $mp9;

    /**
     * @ORM\Column(type="integer", options={"default": 0})
     */
    private $mp7;

    /**
     * @ORM\Column(type="integer", options={"default": 0})
     */
    private $ump45;

    /**
     * @ORM\Column(type="integer", options={"default": 0})
     */
    private $p90;

    /**
     * @ORM\Column(type="integer", options={"default": 0})
     */
    private $galilar;

    /**
     * @ORM\Column(type="integer", options={"default": 0})
     */
    private $ak47;

    /**
     * @ORM\Column(type="integer", options={"default": 0})
     */
    private $scar20;

    /**
     * @ORM\Column(type="integer", options={"default": 0})
     */
    private $famas;

    /**
     * @ORM\Column(type="integer", options={"default": 0})
     */
    private $m4a1;

    /**
     * @ORM\Column(type="integer", options={"default": 0})
     */
    private $m4a1_silencer;

    /**
     * @ORM\Column(type="integer", options={"default": 0})
     */
    private $aug;

    /**
     * @ORM\Column(type="integer", options={"default": 0})
     */
    private $ssg08;

    /**
     * @ORM\Column(type="integer", options={"default": 0})
     */
    private $sg556;

    /**
     * @ORM\Column(type="integer", options={"default": 0})
     */
    private $awp;

    /**
     * @ORM\Column(type="integer", options={"default": 0})
     */
    private $g3sg1;

    /**
     * @ORM\Column(type="integer", options={"default": 0})
     */
    private $m249;

    /**
     * @ORM\Column(type="integer", options={"default": 0})
     */
    private $negev;

    /**
     * @ORM\Column(type="integer", options={"default": 0})
     */
    private $hegrenade;

    /**
     * @ORM\Column(type="integer", options={"default": 0})
     */
    private $flashbang;

    /**
     * @ORM\Column(type="integer", options={"default": 0})
     */
    private $smokegrenade;

    /**
     * @ORM\Column(type="integer", options={"default": 0})
     */
    private $inferno;

    /**
     * @ORM\Column(type="integer", options={"default": 0})
     */
    private $decoy;

    /**
     * @ORM\Column(type="integer", options={"default": 0})
     */
    private $taser;

    /**
     * @ORM\Column(type="integer", options={"default": 0})
     */
    private $mp5sd;

    /**
     * @ORM\Column(type="integer", options={"default": 0})
     */
    private $head;

    /**
     * @ORM\Column(type="integer", options={"default": 0})
     */
    private $chest;

    /**
     * @ORM\Column(type="integer", options={"default": 0})
     */
    private $stomach;

    /**
     * @ORM\Column(type="integer", options={"default": 0})
     */
    private $leftArm;

    /**
     * @ORM\Column(type="integer", options={"default": 0})
     */
    private $rightArm;

    /**
     * @ORM\Column(type="integer", options={"default": 0})
     */
    private $leftLeg;

    /**
     * @ORM\Column(type="integer", options={"default": 0})
     */
    private $rightLeg;

    /**
     * @ORM\Column(type="integer", options={"default": 0})
     */
    private $c4_planted;

    /**
     * @ORM\Column(type="integer", options={"default": 0})
     */
    private $c4_exploded;

    /**
     * @ORM\Column(type="integer", options={"default": 0})
     */
    private $c4_defused;

    /**
     * @ORM\Column(type="integer", options={"default": 0})
     */
    private $ctWin;

    /**
     * @ORM\Column(type="integer", options={"default": 0})
     */
    private $trWin;

    /**
     * @ORM\Column(type="integer", options={"default": 0})
     */
    private $mvp;

    /**
     * @ORM\Column(type="integer", options={"default": 0})
     */
    private $damage;

    /**
     * @ORM\Column(type="integer", options={"default": 0})
     */
    private $matchWin;

    /**
     * @ORM\Column(type="integer", options={"default": 0})
     */
    private $matchDraw;

    /**
     * @ORM\Column(type="integer", options={"default": 0})
     */
    private $matchLose;

    /**
     * @ORM\Column(type="integer", options={"default": 0})
     */
    private $firstBlood;

    /**
     * @ORM\Column(type="integer", options={"default": 0})
     */
    private $noScope;

    /**
     * @ORM\Column(type="integer", options={"default": 0})
     */
    private $noScopeDis;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getPlayerId()
    {
        return $this->playerId;
    }

    /**
     * @param mixed $playerId
     */
    public function setPlayerId($playerId): void
    {
        $this->playerId = $playerId;
    }

    /**
     * @return mixed
     */
    public function getPlayerRank()
    {
        return $this->playerRank;
    }

    /**
     * @param mixed $playerRank
     */
    public function setPlayerRank($playerRank): void
    {
        $this->playerRank = $playerRank;
    }

    /**
     * @return mixed
     */
    public function getServerId()
    {
        return $this->serverId;
    }

    /**
     * @param mixed $serverId
     */
    public function setServerId($serverId): void
    {
        $this->serverId = $serverId;
    }

    /**
     * @return mixed
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * @param mixed $score
     */
    public function setScore($score): void
    {
        $this->score = $score;
    }

    /**
     * @return mixed
     */
    public function getKills()
    {
        return $this->kills;
    }

    /**
     * @param mixed $kills
     */
    public function setKills($kills): void
    {
        $this->kills = $kills;
    }

    /**
     * @return mixed
     */
    public function getDeaths()
    {
        return $this->deaths;
    }

    /**
     * @param mixed $deaths
     */
    public function setDeaths($deaths): void
    {
        $this->deaths = $deaths;
    }

    /**
     * @return mixed
     */
    public function getAssists()
    {
        return $this->assists;
    }

    /**
     * @param mixed $assists
     */
    public function setAssists($assists): void
    {
        $this->assists = $assists;
    }

    /**
     * @return mixed
     */
    public function getSuicides()
    {
        return $this->suicides;
    }

    /**
     * @param mixed $suicides
     */
    public function setSuicides($suicides): void
    {
        $this->suicides = $suicides;
    }

    /**
     * @return mixed
     */
    public function getTk()
    {
        return $this->tk;
    }

    /**
     * @param mixed $tk
     */
    public function setTk($tk): void
    {
        $this->tk = $tk;
    }

    /**
     * @return mixed
     */
    public function getShots()
    {
        return $this->shots;
    }

    /**
     * @param mixed $shots
     */
    public function setShots($shots): void
    {
        $this->shots = $shots;
    }

    /**
     * @return mixed
     */
    public function getHits()
    {
        return $this->hits;
    }

    /**
     * @param mixed $hits
     */
    public function setHits($hits): void
    {
        $this->hits = $hits;
    }

    /**
     * @return mixed
     */
    public function getHeadshots()
    {
        return $this->headshots;
    }

    /**
     * @param mixed $headshots
     */
    public function setHeadshots($headshots): void
    {
        $this->headshots = $headshots;
    }
    /**
     * @return mixed
     */
    public function getRoundsTr()
    {
        return $this->rounds_tr;
    }

    /**
     * @param mixed $rounds_tr
     */
    public function setRoundsTr($rounds_tr): void
    {
        $this->rounds_tr = $rounds_tr;
    }

    /**
     * @return mixed
     */
    public function getRoundsCt()
    {
        return $this->rounds_ct;
    }

    /**
     * @param mixed $rounds_ct
     */
    public function setRoundsCt($rounds_ct): void
    {
        $this->rounds_ct = $rounds_ct;
    }

    /**
     * @return mixed
     */
    public function getKnife()
    {
        return $this->knife;
    }

    /**
     * @param mixed $knife
     */
    public function setKnife($knife): void
    {
        $this->knife = $knife;
    }

    /**
     * @return mixed
     */
    public function getGlock()
    {
        return $this->glock;
    }

    /**
     * @param mixed $glock
     */
    public function setGlock($glock): void
    {
        $this->glock = $glock;
    }

    /**
     * @return mixed
     */
    public function getHkp2000()
    {
        return $this->hkp2000;
    }

    /**
     * @param mixed $hkp2000
     */
    public function setHkp2000($hkp2000): void
    {
        $this->hkp2000 = $hkp2000;
    }

    /**
     * @return mixed
     */
    public function getUspSilencer()
    {
        return $this->uspSilencer;
    }

    /**
     * @param mixed $uspSilencer
     */
    public function setUspSilencer($uspSilencer): void
    {
        $this->uspSilencer = $uspSilencer;
    }

    /**
     * @return mixed
     */
    public function getP250()
    {
        return $this->p250;
    }

    /**
     * @param mixed $p250
     */
    public function setP250($p250): void
    {
        $this->p250 = $p250;
    }

    /**
     * @return mixed
     */
    public function getDeagle()
    {
        return $this->deagle;
    }

    /**
     * @param mixed $deagle
     */
    public function setDeagle($deagle): void
    {
        $this->deagle = $deagle;
    }

    /**
     * @return mixed
     */
    public function getElite()
    {
        return $this->elite;
    }

    /**
     * @param mixed $elite
     */
    public function setElite($elite): void
    {
        $this->elite = $elite;
    }

    /**
     * @return mixed
     */
    public function getFiveseven()
    {
        return $this->fiveseven;
    }

    /**
     * @param mixed $fiveseven
     */
    public function setFiveseven($fiveseven): void
    {
        $this->fiveseven = $fiveseven;
    }

    /**
     * @return mixed
     */
    public function getTec9()
    {
        return $this->tec9;
    }

    /**
     * @param mixed $tec9
     */
    public function setTec9($tec9): void
    {
        $this->tec9 = $tec9;
    }

    /**
     * @return mixed
     */
    public function getCz75a()
    {
        return $this->cz75a;
    }

    /**
     * @param mixed $cz75a
     */
    public function setCz75a($cz75a): void
    {
        $this->cz75a = $cz75a;
    }

    /**
     * @return mixed
     */
    public function getRevolver()
    {
        return $this->revolver;
    }

    /**
     * @param mixed $revolver
     */
    public function setRevolver($revolver): void
    {
        $this->revolver = $revolver;
    }

    /**
     * @return mixed
     */
    public function getNova()
    {
        return $this->nova;
    }

    /**
     * @param mixed $nova
     */
    public function setNova($nova): void
    {
        $this->nova = $nova;
    }

    /**
     * @return mixed
     */
    public function getXm1014()
    {
        return $this->xm1014;
    }

    /**
     * @param mixed $xm1014
     */
    public function setXm1014($xm1014): void
    {
        $this->xm1014 = $xm1014;
    }

    /**
     * @return mixed
     */
    public function getMag7()
    {
        return $this->mag7;
    }

    /**
     * @param mixed $mag7
     */
    public function setMag7($mag7): void
    {
        $this->mag7 = $mag7;
    }

    /**
     * @return mixed
     */
    public function getSawedoff()
    {
        return $this->sawedoff;
    }

    /**
     * @param mixed $sawedoff
     */
    public function setSawedoff($sawedoff): void
    {
        $this->sawedoff = $sawedoff;
    }

    /**
     * @return mixed
     */
    public function getBizon()
    {
        return $this->bizon;
    }

    /**
     * @param mixed $bizon
     */
    public function setBizon($bizon): void
    {
        $this->bizon = $bizon;
    }

    /**
     * @return mixed
     */
    public function getMac10()
    {
        return $this->mac10;
    }

    /**
     * @param mixed $mac10
     */
    public function setMac10($mac10): void
    {
        $this->mac10 = $mac10;
    }

    /**
     * @return mixed
     */
    public function getMp9()
    {
        return $this->mp9;
    }

    /**
     * @param mixed $mp9
     */
    public function setMp9($mp9): void
    {
        $this->mp9 = $mp9;
    }

    /**
     * @return mixed
     */
    public function getMp7()
    {
        return $this->mp7;
    }

    /**
     * @param mixed $mp7
     */
    public function setMp7($mp7): void
    {
        $this->mp7 = $mp7;
    }

    /**
     * @return mixed
     */
    public function getUmp45()
    {
        return $this->ump45;
    }

    /**
     * @param mixed $ump45
     */
    public function setUmp45($ump45): void
    {
        $this->ump45 = $ump45;
    }

    /**
     * @return mixed
     */
    public function getP90()
    {
        return $this->p90;
    }

    /**
     * @param mixed $p90
     */
    public function setP90($p90): void
    {
        $this->p90 = $p90;
    }

    /**
     * @return mixed
     */
    public function getGalilar()
    {
        return $this->galilar;
    }

    /**
     * @param mixed $galilar
     */
    public function setGalilar($galilar): void
    {
        $this->galilar = $galilar;
    }

    /**
     * @return mixed
     */
    public function getAk47()
    {
        return $this->ak47;
    }

    /**
     * @param mixed $ak47
     */
    public function setAk47($ak47): void
    {
        $this->ak47 = $ak47;
    }

    /**
     * @return mixed
     */
    public function getScar20()
    {
        return $this->scar20;
    }

    /**
     * @param mixed $scar20
     */
    public function setScar20($scar20): void
    {
        $this->scar20 = $scar20;
    }

    /**
     * @return mixed
     */
    public function getFamas()
    {
        return $this->famas;
    }

    /**
     * @param mixed $famas
     */
    public function setFamas($famas): void
    {
        $this->famas = $famas;
    }

    /**
     * @return mixed
     */
    public function getM4a1()
    {
        return $this->m4a1;
    }

    /**
     * @param mixed $m4a1
     */
    public function setM4a1($m4a1): void
    {
        $this->m4a1 = $m4a1;
    }

    /**
     * @return mixed
     */
    public function getM4a1Silencer()
    {
        return $this->m4a1_silencer;
    }

    /**
     * @param mixed $m4a1_silencer
     */
    public function setM4a1Silencer($m4a1_silencer): void
    {
        $this->m4a1_silencer = $m4a1_silencer;
    }

    /**
     * @return mixed
     */
    public function getAug()
    {
        return $this->aug;
    }

    /**
     * @param mixed $aug
     */
    public function setAug($aug): void
    {
        $this->aug = $aug;
    }

    /**
     * @return mixed
     */
    public function getSsg08()
    {
        return $this->ssg08;
    }

    /**
     * @param mixed $ssg08
     */
    public function setSsg08($ssg08): void
    {
        $this->ssg08 = $ssg08;
    }

    /**
     * @return mixed
     */
    public function getSsg556()
    {
        return $this->ssg556;
    }

    /**
     * @param mixed $ssg556
     */
    public function setSsg556($ssg556): void
    {
        $this->ssg556 = $ssg556;
    }

    /**
     * @return mixed
     */
    public function getAwp()
    {
        return $this->awp;
    }

    /**
     * @param mixed $awp
     */
    public function setAwp($awp): void
    {
        $this->awp = $awp;
    }

    /**
     * @return mixed
     */
    public function getG3sg1()
    {
        return $this->g3sg1;
    }

    /**
     * @param mixed $g3sg1
     */
    public function setG3sg1($g3sg1): void
    {
        $this->g3sg1 = $g3sg1;
    }

    /**
     * @return mixed
     */
    public function getM249()
    {
        return $this->m249;
    }

    /**
     * @param mixed $m249
     */
    public function setM249($m249): void
    {
        $this->m249 = $m249;
    }

    /**
     * @return mixed
     */
    public function getNegev()
    {
        return $this->negev;
    }

    /**
     * @param mixed $negev
     */
    public function setNegev($negev): void
    {
        $this->negev = $negev;
    }

    /**
     * @return mixed
     */
    public function getHegrenade()
    {
        return $this->hegrenade;
    }

    /**
     * @param mixed $hegrenade
     */
    public function setHegrenade($hegrenade): void
    {
        $this->hegrenade = $hegrenade;
    }

    /**
     * @return mixed
     */
    public function getFlashbang()
    {
        return $this->flashbang;
    }

    /**
     * @param mixed $flashbang
     */
    public function setFlashbang($flashbang): void
    {
        $this->flashbang = $flashbang;
    }

    /**
     * @return mixed
     */
    public function getSmokegrenade()
    {
        return $this->smokegrenade;
    }

    /**
     * @param mixed $smokegrenade
     */
    public function setSmokegrenade($smokegrenade): void
    {
        $this->smokegrenade = $smokegrenade;
    }

    /**
     * @return mixed
     */
    public function getInferno()
    {
        return $this->inferno;
    }

    /**
     * @param mixed $inferno
     */
    public function setInferno($inferno): void
    {
        $this->inferno = $inferno;
    }

    /**
     * @return mixed
     */
    public function getDecoy()
    {
        return $this->decoy;
    }

    /**
     * @param mixed $decoy
     */
    public function setDecoy($decoy): void
    {
        $this->decoy = $decoy;
    }

    /**
     * @return mixed
     */
    public function getTaser()
    {
        return $this->taser;
    }

    /**
     * @param mixed $taser
     */
    public function setTaser($taser): void
    {
        $this->taser = $taser;
    }

    /**
     * @return mixed
     */
    public function getMp5sd()
    {
        return $this->mp5sd;
    }

    /**
     * @param mixed $mp5sd
     */
    public function setMp5sd($mp5sd): void
    {
        $this->mp5sd = $mp5sd;
    }

    /**
     * @return mixed
     */
    public function getHead()
    {
        return $this->head;
    }

    /**
     * @param mixed $head
     */
    public function setHead($head): void
    {
        $this->head = $head;
    }

    /**
     * @return mixed
     */
    public function getChest()
    {
        return $this->chest;
    }

    /**
     * @param mixed $chest
     */
    public function setChest($chest): void
    {
        $this->chest = $chest;
    }

    /**
     * @return mixed
     */
    public function getStomach()
    {
        return $this->stomach;
    }

    /**
     * @param mixed $stomach
     */
    public function setStomach($stomach): void
    {
        $this->stomach = $stomach;
    }

    /**
     * @return mixed
     */
    public function getLeftArm()
    {
        return $this->leftArm;
    }

    /**
     * @param mixed $leftArm
     */
    public function setLeftArm($leftArm): void
    {
        $this->leftArm = $leftArm;
    }

    /**
     * @return mixed
     */
    public function getRightArm()
    {
        return $this->rightArm;
    }

    /**
     * @param mixed $rightArm
     */
    public function setRightArm($rightArm): void
    {
        $this->rightArm = $rightArm;
    }

    /**
     * @return mixed
     */
    public function getLeftLeg()
    {
        return $this->leftLeg;
    }

    /**
     * @param mixed $leftLeg
     */
    public function setLeftLeg($leftLeg): void
    {
        $this->leftLeg = $leftLeg;
    }

    /**
     * @return mixed
     */
    public function getRightLeg()
    {
        return $this->rightLeg;
    }

    /**
     * @param mixed $rightLeg
     */
    public function setRightLeg($rightLeg): void
    {
        $this->rightLeg = $rightLeg;
    }

    /**
     * @return mixed
     */
    public function getC4Planted()
    {
        return $this->c4_planted;
    }

    /**
     * @param mixed $c4_planted
     */
    public function setC4Planted($c4_planted): void
    {
        $this->c4_planted = $c4_planted;
    }

    /**
     * @return mixed
     */
    public function getC4Exploded()
    {
        return $this->c4_exploded;
    }

    /**
     * @param mixed $c4_exploded
     */
    public function setC4Exploded($c4_exploded): void
    {
        $this->c4_exploded = $c4_exploded;
    }

    /**
     * @return mixed
     */
    public function getC4Defused()
    {
        return $this->c4_defused;
    }

    /**
     * @param mixed $c4_defused
     */
    public function setC4Defused($c4_defused): void
    {
        $this->c4_defused = $c4_defused;
    }

    /**
     * @return mixed
     */
    public function getCtWin()
    {
        return $this->ctWin;
    }

    /**
     * @param mixed $ctWin
     */
    public function setCtWin($ctWin): void
    {
        $this->ctWin = $ctWin;
    }

    /**
     * @return mixed
     */
    public function getTrWin()
    {
        return $this->trWin;
    }

    /**
     * @param mixed $trWin
     */
    public function setTrWin($trWin): void
    {
        $this->trWin = $trWin;
    }

    /**
     * @return mixed
     */
    public function getMvp()
    {
        return $this->mvp;
    }

    /**
     * @param mixed $mvp
     */
    public function setMvp($mvp): void
    {
        $this->mvp = $mvp;
    }

    /**
     * @return mixed
     */
    public function getDamage()
    {
        return $this->damage;
    }

    /**
     * @param mixed $damage
     */
    public function setDamage($damage): void
    {
        $this->damage = $damage;
    }

    /**
     * @return mixed
     */
    public function getMatchWin()
    {
        return $this->matchWin;
    }

    /**
     * @param mixed $matchWin
     */
    public function setMatchWin($matchWin): void
    {
        $this->matchWin = $matchWin;
    }

    /**
     * @return mixed
     */
    public function getMatchDraw()
    {
        return $this->matchDraw;
    }

    /**
     * @param mixed $matchDraw
     */
    public function setMatchDraw($matchDraw): void
    {
        $this->matchDraw = $matchDraw;
    }

    /**
     * @return mixed
     */
    public function getMatchLose()
    {
        return $this->matchLose;
    }

    /**
     * @param mixed $matchLose
     */
    public function setMatchLose($matchLose): void
    {
        $this->matchLose = $matchLose;
    }

    /**
     * @return mixed
     */
    public function getFirstBlood()
    {
        return $this->firstBlood;
    }

    /**
     * @param mixed $firstBlood
     */
    public function setFirstBlood($firstBlood): void
    {
        $this->firstBlood = $firstBlood;
    }

    /**
     * @return mixed
     */
    public function getNoScope()
    {
        return $this->noScope;
    }

    /**
     * @param mixed $noScope
     */
    public function setNoScope($noScope): void
    {
        $this->noScope = $noScope;
    }

    /**
     * @return mixed
     */
    public function getNoScopeDis()
    {
        return $this->noScopeDis;
    }

    /**
     * @param mixed $noScopeDis
     */
    public function setNoScopeDis($noScopeDis): void
    {
        $this->noScopeDis = $noScopeDis;
    }
}