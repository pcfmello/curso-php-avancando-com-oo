<?php
/**
 * Created by PhpStorm.
 * User: pcfmello
 * Date: 01/11/16
 * Time: 01:19
 */

namespace Source;


interface IServiceProduto
{

    public function __construct(IConn $db, Produto $produto);
    public function listAll();
    public function save();
    public function update();
    public function delete();

}