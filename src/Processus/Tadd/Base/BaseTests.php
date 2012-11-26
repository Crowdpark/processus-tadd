<?php
/**
 * Created by JetBrains PhpStorm.
 * User: thelittlenerd87
 * Date: 16.08.12
 * Time: 13:35
 * To change this template use File | Settings | File Templates.
 */
namespace Processus\Tadd\Base;

class BaseTests
{

    protected $_host;
    protected $_api;
    protected $_gateway;

    public function run()
    {
        throw new \Exception("not implmented");
    }

    protected function _getUserById()
    {

    }

    protected function _getUserList()
    {

    }

    public function setApi($api)
    {
        $this->_api = $api;
    }

    public function getApi()
    {
        return $this->_api;
    }

    public function setGateway($gateway)
    {
        $this->_gateway = $gateway;
    }

    public function getGateway()
    {
        return $this->_gateway;
    }

    public function setHost($host)
    {
        $this->_host = $host;
    }

    public function getHost()
    {
        return $this->_host;
    }
}