<?php
/**
 * Created by JetBrains PhpStorm.
 * User: thelittlenerd87
 * Date: 30.08.12
 * Time: 17:33
 * To change this template use File | Settings | File Templates.
 */
namespace Application\Task\Portal\Tests\Live;
class StatsApi extends BaseLocalTest
{
    public function run()
    {
        $api = new \Application\Task\Portal\Tests\Api\Stats($this);
        var_dump($api->getGenderStats());
        var_dump($api->getLevelStats());
        var_dump($api->getLocaleStats());
        var_dump($api->getPaymentStageStats());
        var_dump($api->getAgeStats());
    }
}
