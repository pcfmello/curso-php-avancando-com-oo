<?php

require_once "Produto.php";

/* CRIA A CONEXÃO */
$db = new \PDO("mysql:host=localhost:3306;dbname=php-avancando-com-oo", "root", "root");

$product = new Produto($db);

$productList = $product->listAll();

var_dump($productList);