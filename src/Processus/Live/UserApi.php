<?php
/**
 * Created by JetBrains PhpStorm.
 * User: thelittlenerd87
 * Date: 17.08.12
 * Time: 13:58
 * To change this template use File | Settings | File Templates.
 */
namespace Application\Task\Portal\Tests\Live;
class UserApi extends BaseLocalTest
{
    public function run()
    {
        $userApiTest = new \Application\Task\Portal\Tests\Api\User($this);
//        var_dump($userApiTest->fetchAllDocsFromUser());
//        var_dump($userApiTest->countryStats());
//        var_dump($userApiTest->savePlayerData());
        var_dump($userApiTest->getUserList());
    }
}
