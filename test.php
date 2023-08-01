<?php

require_once('vendor/autoload.php');

$client = new \Microcms\Client(
    "okudablog",  // YOUR_DOMAIN は XXXX.microcms.io の XXXX 部分
    "OsNuBO3t4djNLcEKR3fhQmJpJaOw8U7rAKzQ"  // API Key
);

echo $client->get("hello")->text;
