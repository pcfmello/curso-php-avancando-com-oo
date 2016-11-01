<?php

/* OS ARQUIVOS AGORA SÃO IMPORTADOS ATRAVÉS DO COMPOSER (Pasta vendor) */
require_once "../vendor/autoload.php";
require_once "config.php";
require_once "service.php";

$list = $container['produto']->listAll();

var_dump($list);

echo "Hey there!";