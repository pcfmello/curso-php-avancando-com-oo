<?php

namespace Source;

class Produto
{
    private $db;

    public function __construct(IConn $db)
    {
        $this->db = $db->connect();
    }

    public function listAll()
    {
        $query = "select * from produto";

        /* PREPARA A QUERY PARA SER EXECUTADA */
        $stmt = $this->db->prepare($query);
        /* EXECUTA A QUERY */
        $stmt->execute();

        /* RECEBE O RESULTADO DA QUERY TRANSFORMANDO EM UM ARRAY ASSOCIATIVO */
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

}