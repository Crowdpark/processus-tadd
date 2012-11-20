<?php
/**
 * Created by JetBrains PhpStorm.
 * User: thelittlenerd87
 * Date: 03.09.12
 * Time: 20:05
 * To change this template use File | Settings | File Templates.
 */
namespace Application\Task\Portal\Tests\Api;
class PortalUser extends \Application\Task\Portal\Tests\Api\BaseApiTest
{
    /**
     * @param $params
     *
     * @return bool
     */
    public function authUser($params)
    {
        return $this->run("Portal.PortalUser.authUser", $params);
    }

    /**
     * @param $params
     *
     * @return array
     */
    public function getAllPortalUsers($params)
    {
        return $this->run("Portal.PortalUser.getAllPortalUsers", array());
    }

    /**
     * @param $params
     *
     * @return \Processus\Abstracts\Vo\AbstractMVO
     */
    public function addUserAsPortalAdminUser($params)
    {
        return $this->run("Portal.PortalUser.addUserAsPortalAdminUser", $params);
    }
}
