<?php
/**
 * Created by PhpStorm.
 * User: Patryk Szczepanski
 * Date: 10/11/2019
 * Time: 04:44
 */

namespace App\Twig;

use App\Service\steamService;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class RankMeExtension extends AbstractExtension
{
    private $steam;

    public function __construct(steamService $steam)
    {
        $this->steam = $steam;
    }

    function DaysToSecond(int $value)
    {
        return $value*86400;
    }

    function SecondsToDays(int $value)
    {
        return $value / 86400;
    }

    function SecondsToHours(int $value)
    {
        return $value / 3600;
    }

    function SecondsToMinutes(int $value)
    {
        return $value / 60;
    }

    function RestOfDays(int $value)
    {
        return $value % 86400;
    }

    function RestOfHours(int $value)
    {
        return $value % 3600;
    }

    /**
     * @return array|TwigFilter[]|\Twig_Filter[]
     */
    public function getFilters()
    {

        return [
            new TwigFilter('getPlayTime', [$this, 'getPlayTime'], array('is_safe' => array('html'))),
            new TwigFilter('getRank', [$this, 'getRank'], array('is_safe' => array('html'))),
            new TwigFilter('getSteamAvatar', [$this, 'getSteamAvatar'], array('is_safe' => array('html'))),
            new TwigFilter('toSteamCommunityID', [$this, 'toSteamCommunityID'], array('is_safe' => array('html'))),
        ];
    }


    /**
     * @param $service
     * @return string
     */
    public function getPlayTime($unix_time)
    {
        $days = $this->SecondsToDays($unix_time);
        $hours = $this->SecondsToHours($this->RestOfDays($unix_time));
        $minutes = $this->SecondsToMinutes($this->RestOfHours($this->RestOfDays($unix_time)));

        $response = '';

        if($days >= 1)
            $response = (int)$days.' dni';

        if($hours >= 1)
            $response = $response.' '.(int)$hours.' h';

        $response = $response.' '.(int)$minutes.' minut';

        return $response;
    }


    /**
     * @param $service
     * @return string
     */
    public function getRankName($rank)
    {
        $sRanksNames = [
            "Unranked",
            "Silver 1",
            "Silver 2",
            "Silver 3",
            "Silver 4",
            "Silver Elite",
            "Silver Elite Master",
            "Gold Nova 1",
            "Gold Nova 2",
            "Gold Nova 3",
            "Gold Nova Master",
            "Master Guardian 1",
            "Master Guardian 2",
            "Master Guardian Elite",
            "Distinguished Master Guardian",
            "Legendary Eagle",
            "Legendary Eagle Master",
            "Supreme Master First Class",
            "The Global Elite"
        ];

        return $sRanksNames[$rank];
    }


    /**
     * @param $service
     * @return string
     */
    public function getSteamAvatar($authData, $type)
    {
        return $this->steam->getUserAvatar($authData, $type);
    }


    /**
     * @param $service
     * @return string
     */
    public function toSteamCommunityID($authData)
    {
        return $this->steam->toCommunityID($authData);
    }
}