<?php

/* USANDO O PIMPLE PARA REGISTRAR SERVIÇOS */
use Pimple\Container;

/* CRIANDO UM CONTAINER DE SERVIÇOS */
$container = new Container();

/* DADOS DE ACESSO AO BD */
$container['dsn'] = "mysql:host=localhost:3306;dbname=php-avancando-com-oo";
$container['user'] = "root";
$container['pass'] = "root";

