<?php
/**
 * Created by JetBrains PhpStorm.
 * User: thelittlenerd87
 * Date: 20.08.12
 * Time: 15:17
 * To change this template use File | Settings | File Templates.
 */
namespace Application\Task\Portal\Tests\Api;
class User extends BaseApiTest
{
    /**
     * @return array
     */
    public function fetchAllDocsFromUser()
    {
        return $this->run("Portal.User.fetchAllDocsFromUser", array("userId" => "1087101225"));
    }

    /**
     * @return array
     */
    public function getUserList()
    {
        return $this->run("Portal.User.getUserList", array("skip"  => 0,
                                                           "limit" => 100)
        );
    }

    /**
     * @return array
     */
    public function countryStats()
    {
        return $this->run("Portal.User.countryStats", array());
    }

    /**
     * @return array
     */
    public function searchUserById()
    {
        return $this->run("Portal.User.searchUserById", array("userId"  => 0));
    }

    /**
     * @return array
     */
    public function fetchAllFriendsDocs()
    {
        return $this->run("Portal.User.fetchAllFriendsDocs", array("userId"  => 0));
    }

    /**
     * @return array
     */
    public function savePlayerData()
    {
        $randCoins = mt_rand(0, 99999999999999);
        return $this->run("Portal.User.savePlayerData", json_decode('{
                                                    "language": "en",
                                                    "isAdmin": false,
                                                    "isBaned": false,
                                                    "coins": 75335640,
                                                    "experience": 0,
                                                    "level": 1,
                                                    "freeSpins": 0,
                                                    "scatterSpins": 0,
                                                    "consecutiveLogins": 1,
                                                    "dayLogins": 1,
                                                    "bonusClaimed": true,
                                                    "bonusConsecutiveSpins": 0,
                                                    "maxLines": 0,
                                                    "maxBet": 0,
                                                    "maxTotalBet": 0,
                                                    "plays": 202,
                                                    "lastPlayedMachine": 0,
                                                    "updated": 1345657236,
                                                    "nonConsecutiveLogins": 0,
                                                    "lastLogin": 1345657236,
                                                    "friends": 9,
                                                    "consecutiveLoginTime": 1345657236,
                                                    "bonusSpinTime": "2012-08-22 20:02:46",
                                                    "bonusSpinTimeSeconds": 5118,
                                                    "id": "1087101225:player"
                                                }'
            )
        );
    }
}
