<?php

require_once "vendor/autoload.php";

$reader = new \GeoIp2\Database\Reader(dirname(__FILE__) . '/geodb/GeoLite2-Country.mmdb');
$record = $reader->country('128.101.101.101');

    var_dump($record->country->isoCode);