<?php
interface Database {
    public function listarProdutos();
    public function alterarProduto();
    public function adicionarProduto();
}

class MysqlDB implements Database {

    public function listarProdutos(){

    }
    public function adicionarProduto(){
        echo "Adicionando com mysql";

    }
    public function alterarProduto(){

    }
}

class OracleDB implements Database {

    public function listarProdutos(){

    }
    public function adicionarProduto(){
        echo "Adicionando com mysql";
    }
    public function alterarProduto(){

    }
}

class NodeDb implements Database {
    public function listarProdutos() {

    }
    public function adicionarProduto() {
        echo "Adicionando com Node";
    }
    public function alterarProduto() {

    }
}


$db = new NodeDB();
$db->adicionarProduto();