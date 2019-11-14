<?php
/**
 * Created by PhpStorm.
 * User: Patryk Szczepanski
 * Date: 10/11/2019
 * Time: 02:17
 */

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;


/**
 * @ORM\Entity(repositoryClass="App\Repository\UsersRepository")
 * @ORM\Table(name="`nox_rankme_players`")
 * @UniqueEntity(fields="authData", message="Steam ID jest już w użyciu")
 */
class userEntity
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=64)
     * @Assert\NotBlank()
     */
    private $authData;

    /**
     * @ORM\Column(type="string", length=48)
     */
    private $playerName;

    /**
     * @ORM\Column(type="integer" , options={"default": 0})
     */
    private $connected;

    /**
     * @ORM\Column(type="integer", options={"default": 0})
     */
    private $lastconnect;

    /**
     * @ORM\Column(type="string", length=48)
     */
    private $lastip;

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
    public function getAuthData()
    {
        return $this->authData;
    }

    /**
     * @param mixed $authData
     */
    public function setAuthData($authData): void
    {
        $this->authData = $authData;
    }

    /**
     * @return mixed
     */
    public function getPlayerName()
    {
        return $this->playerName;
    }

    /**
     * @param mixed $playerName
     */
    public function setPlayerName($playerName): void
    {
        $this->playerName = $playerName;
    }

    /**
     * @return mixed
     */
    public function getConnected()
    {
        return $this->connected;
    }

    /**
     * @param mixed $connected
     */
    public function setConnected($connected): void
    {
        $this->connected = $connected;
    }

    /**
     * @return mixed
     */
    public function getLastconnect()
    {
        return $this->lastconnect;
    }

    /**
     * @param mixed $lastconnect
     */
    public function setLastconnect($lastconnect): void
    {
        $this->lastconnect = $lastconnect;
    }

    /**
     * @return mixed
     */
    public function getLastip()
    {
        return $this->lastip;
    }

    /**
     * @param mixed $lastip
     */
    public function setLastip($lastip): void
    {
        $this->lastip = $lastip;
    }
}