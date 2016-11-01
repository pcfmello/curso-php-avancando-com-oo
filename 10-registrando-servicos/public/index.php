<?php

/* OS ARQUIVOS AGORA SÃO IMPORTADOS ATRAVÉS DO COMPOSER (Pasta vendor) */
require_once "../vendor/autoload.php";

/* USANDO O PIMPLE PARA REGISTRAR SERVIÇOS */
use Pimple\Container;

/* CRIANDO UM CONTAINER DE SERVIÇOS */
$container = new Container();

/* CRIANDO UM CONTAINER PARA RETORNAR A CONEXÃO COM O BD */
$container['conn'] = function(){
    return new \Source\Conn("mysql:host=localhost:3306;dbname=php-avancando-com-oo", "root", "root");
};

/* CRIANDO UM CONTAINER PARA RETORNAR PRODUTOS */
$container['produto'] = function($c){
    return new \Source\Produto($c['conn']);
};

$list = $container['produto']->listAll();

var_dump($list);

echo "Hey there!";