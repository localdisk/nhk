<?php

namespace NHK;

use Guzzle\Http\Client;

/**
 * NHK 番組表API
 *
 * @author localdisk
 */
class Api
{

    /**
     * ベースURL
     */
    const BASE_URL = 'http://api.nhk.or.jp/v1/pg/';

    /**
     * Program List API
     *
     * @param string $area
     * @param string $service
     * @param string $date
     * @return \Guzzle\Http\Message\Response
     */
    public function getList($area, $service, $date)
    {
        $url = self::BASE_URL . "list/{$area}/{$service}/{$date}.json";
        return $this->send($url);
    }

    /**
     * Program Genre API
     *
     * @param string $area
     * @param string $service
     * @param string $genre
     * @param string $date
     * @return \Guzzle\Http\Message\Response
     */
    public function getGenre($area, $service, $genre, $date)
    {
        $url = self::BASE_URL . "genre/{$area}/{$service}/{$genre}/{$date}.json";
        return $this->send($url);
    }

    /**
     * Program Info API
     *
     * @param string $area
     * @param string $service
     * @param string $id
     * @return \Guzzle\Http\Message\Response
     */
    public function getInfo($area, $service, $id)
    {
        $url = self::BASE_URL . "info/{$area}/{$service}/{$id}.json";
        return $this->send($url);
    }

    /**
     * Now On Air API
     *
     * @param string $area
     * @param string $service
     * @return \Guzzle\Http\Message\Response
     */
    public function getNow($area, $service)
    {
        $url = self::BASE_URL . "now/{$area}/{$service}.json";
        return $this->send($url);
    }

    /**
     * Send Request
     *
     * @param string $url
     * @return \Guzzle\Http\Message\Response
     */
    private function send($url)
    {
        $config = require __DIR__ . '/config.php';
        $key = $config['key'];

        $request = new Client($url . '{?key}', ['key' => $key]);
        return $request->get()->send();
    }

}
