<?php
/**
 * Created by JetBrains PhpStorm.
 * User: thelittlenerd87
 * Date: 07.09.12
 * Time: 03:57
 * To change this template use File | Settings | File Templates.
 */
namespace Application\Task\Portal\Tests\Mvo;
class LogMvo extends \Processus\Abstracts\AbstractTask
{

    public function run()
    {
        $log = new \Application\Mvo\Portal\LogMvo();
        $log->setData($this->_getRandomData());
        $log->saveInMem();
        var_dump($log->getMemId());
    }

    private function _getRandomData()
    {
        return array(
            "user"    => $this->_getUserId(),
            "logData" => $this->_getRandomLogData()
        );
    }

    /**
     * @return array
     */
    private function _getRandomLogData()
    {
        return array(
            "created"    => time(),
            "logType"    => mt_rand(0, 10),
            "actionData" => array()
        );
    }

    private function _getUserId()
    {
        return mt_rand(0, 8987897989) . ":user:info";
    }

    /**
     * @return string
     */
    protected function _getLogTable()
    {
        // TODO: Implement _getLogTable() method.
    }

    /**
     * @param $rawObject
     *
     * @return array
     */
    protected function _getSqlLogParams($rawObject)
    {
        // TODO: Implement _getSqlLogParams() method.
    }
}
