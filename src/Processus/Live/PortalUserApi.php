<?php
/**
 * Created by JetBrains PhpStorm.
 * User: thelittlenerd87
 * Date: 03.09.12
 * Time: 20:08
 * To change this template use File | Settings | File Templates.
 */
namespace Application\Task\Portal\Tests\Live;
class PortalUserApi extends BaseLocalTest
{
    public function run()
    {

        $api = new \Application\Task\Portal\Tests\Api\PortalUser($this);
        var_dump($api->getAllPortalUsers(array()));
//        var_dump($api->authUser(array()));
        var_dump($api->addUserAsPortalAdminUser(array("userId" => "")));
    }
}
