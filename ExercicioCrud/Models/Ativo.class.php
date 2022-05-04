<?php

chdir(__DIR__);
require_once './Model.class.php';


class Ativo extends Model
{
    protected string $table;

    public function __construct()
    {
        parent::__construct();

        $this->table = 'ativo';
    }

    function inserir(array $dados): ?int
    {
        $stmt = $this->prepare("INSERT INTO {$this->table} (nome) 
        VALUES (:nome)");
 
    $stmt->bindParam(':nome', $dados['nome']);


    if($stmt->execute()){
        return $this->lastInsertId();
    }
        else{
        
            return false;
    }        
    }

    function atualizar(int $id, array $dados): bool
    {
        $stmt = $this->prepare("UPDATE {$this->table} SET id = :id, nome = :nome WHERE id = :id");

        $stmt->bindParam(':id', $id); 
        $stmt->bindParam(':Nome', $dados['nome']); 
    
        $stmt->execute();

        if($stmt->rowCount() > 0){
    
            return true;
    }
        else{
        return false;
    }     
    }

    function listar(int $id = null): ?array
    {
        if($id){

            $stmt = $this->prepare("SELECT id, nome FROM {$this->table} WHERE id = :id");

            $stmt->bindParam(':id', $id);
        }
        else{
            $stmt = $this->prepare("SELECT id, nome FROM {$this->table} ");
        }

        $stmt->execute();

        $lista = [];

        while($registro = $stmt->fetch(PDO::FETCH_ASSOC)){
           
            $lista[] = $registro;
        }
        
        return $lista;
        }
    }

    $ativo = new Ativo;

    echo $ativo->inserir(['nome' => 'NUBR33']);

