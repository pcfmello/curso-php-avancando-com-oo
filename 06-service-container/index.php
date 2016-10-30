<?php

require_once "IConn.php";
require_once "Conn.php";
require_once "Produto.php";
require_once "Container.php";

/* RECEBE UMA CONEXÃO DO BD(Não uailizado mais no sistema) */
$db = Container::getConn();

/* CRIA UM NOVO PRODUTO */
$product = Container::getProduto();

$productList = $product->listAll();

var_dump($productList);