<?php

use Alxmdev\ApiTinyErp\TinyErp;

require './src/TinyErp.php';

$token = "9be73e18b74cf19f777929abe65246e0ca38eddc";

$tiny = new TinyErp($token);

$infos = $tiny->infos();

var_dump($infos->getAccountInformation());