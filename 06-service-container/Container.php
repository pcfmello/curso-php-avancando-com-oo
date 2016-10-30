<?php

class Container
{
    /* SERVIÇO QUE CRIA UM NOVO PRODUTO JÁ COM A CONEXÃO */
    public static function getProduto()
    {
        return new Produto(self::getConn());
    }

    /* SERVIÇO QUE CRIA UMA CONEXÃO */
    public static function getConn()
    {
        return new Conn("mysql:host=localhost:3306;dbname=php-avancando-com-oo", "root", "root");
    }
}