<?php

/* CRIA A CONEXÃO */
$db = new \PDO("mysql:host=localhost:3306;dbname=php-avancando-com-oo", "root", "root");

$query = "select * from produto";

/* PREPARA A QUERY PARA SER EXECUTADA */
$stmt = $db->prepare($query);
/* EXECUTA A QUERY */
$stmt->execute();

/* RECEBE O RESULTADO DA QUERY TRANSFORMANDO EM UM ARRAY ASSOCIATIVO */
$productList = $stmt->fetchAll(\PDO::FETCH_ASSOC);

var_dump($productList);