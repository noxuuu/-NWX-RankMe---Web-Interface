<?php
/**
 * Created by PhpStorm.
 * User: Patryk Szczepanski
 * Date: 10/11/2019
 * Time: 05:43
 */

namespace App\Service;

class steamService
{
    function toCommunityID($id) {
        if (preg_match('/^STEAM_/', $id)) {
            $parts = explode(':', $id);
            return bcadd(bcadd(bcmul($parts[2], '2'), '76561197960265728'), $parts[1]);
        } elseif (is_numeric($id) && strlen($id) < 16) {
            return bcadd($id, '76561197960265728');
        } else {
            return $id;
        }
    }

    function toSteamID($id) {
        if (is_numeric($id) && strlen($id) >= 16) {
            $z = bcdiv(bcsub($id, '76561197960265728'), '2');
        } elseif (is_numeric($id)) {
            $z = bcdiv($id, '2');
        } else {
            return $id;
        }
        $y = bcmod($id, '2');
        return 'STEAM_0:' . $y . ':' . floor($z);
    }

    function toUserID($id) {
        if (preg_match('/^STEAM_/', $id)) {
            $split = explode(':', $id);
            return $split[2] * 2 + $split[1];
        } elseif (preg_match('/^765/', $id) && strlen($id) > 15) {
            return bcsub($id, '76561197960265728');
        } else {
            return $id;
        }
    }

    function getUserAvatar($authData, $type){

        $authData = $this->toCommunityID($authData);
        $json = file_get_contents('http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=52A66B13219F645834149F1A1180770A&steamids='.$authData);
        $parsed = json_decode($json);

        foreach($parsed->response->players as $player){
            if($type == 'small')
                return  $player->avatar;
            else if($type == 'medium')
                return  $player->avatarmedium;
            else if($type == 'full')
                return  $player->avatarfull;
        }

        return null;
    }
}