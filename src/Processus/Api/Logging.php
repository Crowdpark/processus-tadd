<?php
/**
 * Created by JetBrains PhpStorm.
 * User: thelittlenerd87
 * Date: 30.08.12
 * Time: 17:34
 * To change this template use File | Settings | File Templates.
 */
namespace Application\Task\Portal\Tests\Api;
class Logging extends \Application\Task\Portal\Tests\Api\BaseApiTest
{
    /**
     * @return mixed
     */
    public function getLogs()
    {
        $method = "Portal.Logging.getLogs";
        return $this->run($method, array());
    }

}
