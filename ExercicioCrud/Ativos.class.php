<?php
require_once('Investimentos.class.php');
require_once('Cliente.class.php');
class Ativos extends Clientes {
    private $id;
    private $nome;


    function listarAtivos(int $id = null):array{
        echo "Listar Ativos";
        return [];
    }

    function apagarAtivo(int $dados):bool{
        echo "Ativo(s) Apagado";
    }
}