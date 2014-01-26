<?php

require_once '../vendor/autoload.php';

use NHK\Api;

/**
 * Description of ApiTest
 *
 * @author localdisk
 */
class ApiTest extends PHPUnit_Framework_TestCase
{

    private $api;

    protected function setUp()
    {
        $this->api = new Api();
    }

    public function testGetList()
    {
        $response = $this->api->getList('130', 'g1', '2014-01-26');
        $this->assertTrue($response->isSuccessful());
    }

    public function testGetGenre()
    {
        $response = $this->api->getGenre('130', 'g1', '0000', '2014-01-26');
        $this->assertTrue($response->isSuccessful());
    }

    public function testGetInfo()
    {
        $response = $this->api->getInfo('130', 'g1', '2014012627809');
        $this->assertTrue($response->isSuccessful());
    }

    public function testGetNow()
    {
        $response = $this->api->getNow('130', 'g1');
        $this->assertTrue($response->isSuccessful());
    }

}
