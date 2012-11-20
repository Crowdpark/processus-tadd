<?php
/**
 * Created by JetBrains PhpStorm.
 * User: thelittlenerd87
 * Date: 20.08.12
 * Time: 15:18
 * To change this template use File | Settings | File Templates.
 */
namespace Application\Task\Portal\Tests\Api;
class BaseApiTest extends \Processus\Abstracts\AbstractClass
{
    /**
     * @var \Application\Task\Portal\Tests\BaseTests
     */
    private $_apiData;

    public function __construct(\Application\Task\Portal\Tests\BaseTests $data)
    {
        $this->_apiData = $data;
    }

    /**
     * @param $method
     * @param $params
     *
     * @return array
     */
    public function run($method, $params)
    {
        $rpcData = new \Processus\Lib\JsonRpc\JsonRpcDataVo();
        $rpcData->setMethod($method)
            ->setRpcId(1)
            ->setParams(array($params));

        $gateway = $this->_apiData->getHost() . $this->_apiData->getApi() . $this->_apiData->getGateway();
        $client  = new \Processus\Lib\JsonRpc\Client();
        return $client->setGateway($gateway)
            ->sendRpc($rpcData);
    }
}
