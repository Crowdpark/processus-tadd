<?php
/**
 * Created by JetBrains PhpStorm.
 * User: thelittlenerd87
 * Date: 23.08.12
 * Time: 18:39
 * To change this template use File | Settings | File Templates.
 */
namespace Application\Task\Portal\Tests\Local;
class PlayerApi extends BaseLocalTest
{
    public function run()
    {
        $api = new \Application\Task\Portal\Tests\Api\Player($this);
        var_dump($api->fetchAll());
    }
}
