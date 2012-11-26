<?php
/**
 * Created by JetBrains PhpStorm.
 * User: thelittlenerd87
 * Date: 20.08.12
 * Time: 15:18
 * To change this template use File | Settings | File Templates.
 */
namespace Processus\Tadd\Base;

use Processus\Client\JsonRpc\JsonRpcDataVo;
use Processus\Client\JsonRpc\Client;
use BaseTest;

class BaseApiTest
{
    /**
     * @var BaseTests
     */
    private $_apiData;

    public function __construct(BaseTests $data)
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
        $rpcData = new JsonRpcDataVo();
        $rpcData->setMethod($method)
            ->setRpcId(1)
            ->setParams(array($params));

        $gateway = $this->_apiData->getHost() . $this->_apiData->getApi() . $this->_apiData->getGateway();
        $client  = new Client();

        return $client->setGateway($gateway)
            ->sendRpc($rpcData);
    }
}
