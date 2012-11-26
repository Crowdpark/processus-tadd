<?php
/**
 * Created by JetBrains PhpStorm.
 * User: thelittlenerd87
 * Date: 20.08.12
 * Time: 15:14
 * To change this template use File | Settings | File Templates.
 */
namespace Processus\Tadd\Base;

class BaseLocalTest extends BaseTests
{
    public function __construct()
    {
        $this->setHost("http://ges-game.crowdpark-cloud.com/portal/");
        $this->setApi("api/v1/portal/");
        $this->setGateway("index.php");
    }
}
