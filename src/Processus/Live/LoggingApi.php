<?php
/**
 * Created by JetBrains PhpStorm.
 * User: thelittlenerd87
 * Date: 30.08.12
 * Time: 17:42
 * To change this template use File | Settings | File Templates.
 */
namespace Application\Task\Portal\Tests\Live;
class LoggingApi extends BaseLocalTest
{
    public function run()
    {
        $api = new \Application\Task\Portal\Tests\Api\Logging($this);
        var_dump($api->getLogs());
    }
}
