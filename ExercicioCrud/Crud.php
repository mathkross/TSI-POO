<?php

interface Crud {
    public function criar(int $id):bool;
    public function editar(int $id):bool;
    public function apagar(int $id):bool;
    public function atualizar(int $id):bool;
    public function listar(int $id):array;

}