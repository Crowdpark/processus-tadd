<?php
/**
 * Created by JetBrains PhpStorm.
 * User: thelittlenerd87
 * Date: 23.08.12
 * Time: 17:24
 * To change this template use File | Settings | File Templates.
 */
namespace Application\Task\Portal\Tests\Local;
class TransactionApi extends BaseLocalTest
{
    public function run()
    {
        $transactionApi = new \Application\Task\Portal\Tests\Api\Transaction($this);
        var_dump($transactionApi->fetchAll());
    }
}
