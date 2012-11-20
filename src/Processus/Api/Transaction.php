<?php
/**
 * Created by JetBrains PhpStorm.
 * User: thelittlenerd87
 * Date: 23.08.12
 * Time: 17:24
 * To change this template use File | Settings | File Templates.
 */
namespace Application\Task\Portal\Tests\Api;
class Transaction extends \Application\Task\Portal\Tests\Api\BaseApiTest
{
    public function fetchAll()
    {
        return $this->run("Portal.Transactions.fetchAll", array());
    }
}
