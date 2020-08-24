<?php

require './../vendor/autoload.php';

$json = file_get_contents('./../data.json');
$data = json_decode($json, true);

$resp = qarray($data)->from('packages')
    //->where('name', 'guzzlehttp/promises')
    ->get();

//$resp['country'] = "Bangladesh";

foreach ($resp as $item) {
    dump($item);
}
