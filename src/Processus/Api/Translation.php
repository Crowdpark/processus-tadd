<?php
/**
 * Created by JetBrains PhpStorm.
 * User: thelittlenerd87
 * Date: 30.08.12
 * Time: 17:43
 * To change this template use File | Settings | File Templates.
 */
namespace Application\Task\Portal\Tests\Api;
class Translation extends BaseApiTest
{

    public function getTranslation()
    {
        return $this->run("Portal.Translation.getTranslation", array());
    }

    public function saveTranslation($params)
    {

    }
}
