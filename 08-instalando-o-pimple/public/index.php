<?php

/* OS ARQUIVOS AGORA SÃO IMPORTADOS ATRAVÉS DO COMPOSER (Pasta vendor) */
require_once "../vendor/autoload.php";

/* USANDO O PIMPLE PARA REGISTRAR SERVIÇOS */
use Pimple\Container;

/* CRIANDO UM CONTAINER DE SERVIÇOS */
$container = new Container();

/* CRIANDO UM SERVIÇO DE DATA*/
$container['date'] = function () {
    return new \DateTime;
};

/* ACESSANDO O SERVIÇO NO CONTAINER E MOSTRANDO O RESULTADO */
var_dump($container['date']);



