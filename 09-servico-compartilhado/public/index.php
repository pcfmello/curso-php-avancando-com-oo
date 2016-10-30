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
/* EXECUTA O SERVIÇO A CADA CHAMADA MAS RETORNA O MESMO OBJETO */
var_dump($container['date']);
echo "<br>";
sleep(5);
echo "<br>";
var_dump($container['date']);

echo "<br>";
echo "<br>";

/* CRIANDO UM SERVIÇO DE DATA TO TIPO FACTORY POOIS CRIA UM NOVO OBJETO A CADA CHAMADA DO SERVIÇO */
$container['dateFactory'] = $container->factory(function () {
    return new \DateTime;
});

/* ACESSANDO O SERVIÇO NO CONTAINER E MOSTRANDO O RESULTADO */
/* EXECUTA O SERVIÇO A CADA CHAMADA E RETORNA UM NOVO OBJETO */
var_dump($container['dateFactory']);
echo "<br>";
sleep(5);
echo "<br>";
var_dump($container['dateFactory']);



