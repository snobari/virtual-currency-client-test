<?php
namespace Client;

use GuzzleHttp\Client;

require_once __DIR__ . '/../vendor/autoload.php';

class BitFlyerClient
{
    private $url;


//    private $key;
//    private $pass;

    function __construct()
    {
        $this->url = 'https://api.bitflyer.jp';
//        $iniFIle = parse_ini_file(__DIR__ . '/../Config/secret.ini');
//        $this->key = $iniFIle['bitflyer_key'];
//        $this->pass = $iniFIle['bitflyer_password'];
    }

    public function getBoard()
    {
        $client = new Client();
        $res = $client->request('GET', $this->url . '/v1/board');
//        echo $res->getStatusCode();
//        echo $res->getHeaderLine('content-type');
        $json = json_decode($res->getBody(), true);
        return $json;
    }
}
