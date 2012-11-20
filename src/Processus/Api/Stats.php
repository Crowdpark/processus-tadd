<?php
/**
 * Created by JetBrains PhpStorm.
 * User: thelittlenerd87
 * Date: 30.08.12
 * Time: 17:34
 * To change this template use File | Settings | File Templates.
 */
namespace Application\Task\Portal\Tests\Api;
class Stats extends \Application\Task\Portal\Tests\Api\BaseApiTest
{
    /**
     * @return mixed
     */
    public function getLocaleStats()
    {
        $method = "Portal.Stats.getLocaleStats";
        var_dump($method);
        return $this->run($method, array());
    }

    /**
     * @return mixed
     */
    public function getPaymentStageStats()
    {
        $method = "Portal.Stats.getPaymentStageStats";
        var_dump($method);
        return $this->run($method, array());
    }

    /**
     * @return mixed
     */
    public function getLevelStats()
    {
        $method = "Portal.Stats.getLevelStats";
        var_dump($method);
        return $this->run($method, array());
    }

    /**
     * @return mixed
     */
    public function getGenderStats()
    {
        $method = "Portal.Stats.getGenderStats";
        var_dump($method);
        return $this->run($method, array());
    }

    /**
     * @return mixed
     */
    public function getAgeStats()
    {
        $method = "Portal.Stats.getAgeStats";
        var_dump($method);
        return $this->run($method, array());
    }

}
