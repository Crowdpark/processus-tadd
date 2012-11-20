<?php
/**
 * Created by JetBrains PhpStorm.
 * User: thelittlenerd87
 * Date: 20.08.12
 * Time: 15:14
 * To change this template use File | Settings | File Templates.
 */
namespace Application\Task\Portal\Tests\Local;
class BaseLocalTest extends \Application\Task\Portal\Tests\BaseTests
{
    public function __construct()
    {
        $this->setHost("http://francis-portal-yacg.hippsterkiller.local.crowdpark-cloud.com/");
        $this->setApi("api/v1/portal/");
        $this->setGateway("index.php");
    }
}
