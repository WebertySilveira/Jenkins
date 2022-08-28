<?php

require_once __DIR__ . "/vendor/autoload.php";

use Src\maquinaDeBrinquedos;

$maquina = new maquinaDeBrinquedos();
$maquina->setBrinquedos(2);
echo($maquina->getBrinquedos());