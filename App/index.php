<?php

require_once __DIR__ . '/../Client/BitFlyerClient.php';
require_once __DIR__ . '/../Client/ZaifClient.php';


//echo "取引所|高い|安い\n";
//echo "-------------------\n";



$client = new \Client\BitFlyerClient();
$bifFlyerRes = $client->getBoard();
$bitPrice = $bifFlyerRes['mid_price'];
echo 'biflyer:' . $bitPrice . "\n";
$client = new \Client\ZaifClient();
$zaifRes = $client->getBoard();
$zaifPrice = $zaifRes['last_price'];

echo 'Zaif:' . $zaifPrice . "\n";
echo 'diff:' . abs($bitPrice - $zaifPrice) . "\n";
//echo 'diffPercent:' . abs($bitPrice / $zaifPrice * 100) . '%' . "\n";
