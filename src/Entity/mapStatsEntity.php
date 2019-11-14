<?php
/**
 * Created by PhpStorm.
 * User: Patryk Szczepanski
 * Date: 10/11/2019
 * Time: 03:55
 */

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MapStatsRepository")
 * @ORM\Table(name="nox_rankme_map_stats")
 * @UniqueEntity(fields="id")
 */
class mapStatsEntity
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=32)
     */
    private $name;

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
    private $played;

    /**
     * @ORM\Column(type="integer", options={"default": 0})
     */
    private $won;

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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
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
    public function getPlayed()
    {
        return $this->played;
    }

    /**
     * @param mixed $played
     */
    public function setPlayed($played): void
    {
        $this->played = $played;
    }

    /**
     * @return mixed
     */
    public function getWon()
    {
        return $this->won;
    }

    /**
     * @param mixed $won
     */
    public function setWon($won): void
    {
        $this->won = $won;
    }
}