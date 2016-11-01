<?php


/* CRIANDO UM CONTAINER PARA RETORNAR A CONEXÃO COM O BD */
$container['conn'] = function($c){
    return new \Source\Conn($c['dsn'], $c['user'], $c['pass']);
};

/* CRIANDO UM CONTAINER PARA RETORNAR PRODUTOS */
$container['produto'] = function($c){
    return new \Source\Produto($c['conn']);
};