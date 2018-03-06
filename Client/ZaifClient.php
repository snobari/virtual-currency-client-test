<?php
namespace Client;

use GuzzleHttp\Client;

require_once __DIR__ . '/../vendor/autoload.php';


class ZaifClient
{

    private $url;
//    private $key;
//    private $pass;

    function __construct()
    {
        $this->url = 'https://api.zaif.jp';
//        $iniFIle = parse_ini_file(__DIR__ . '/../Config/secret.ini');
//        $this->key = $iniFIle['zaif_key'];
//        $this->pass = $iniFIle['zaif_password'];
    }

    public function getBoard()
    {
        $client = new Client();
        $res = $client->request('GET', $this->url . '/api/1/last_price/btc_jpy');
//        echo $res->getStatusCode();
//        echo $res->getHeaderLine('content-type');
        $json = json_decode($res->getBody(), true);
        return $json;
    }
}
//https://api.zaif.jp/api/1/last_price/btc_jpy
