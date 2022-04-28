<?php
interface User {

    public function seLogar();
    public function apagar();
}

class Usuario implements User{

    protected $nome = 'Fernando';
    private $email;
    private $nasc;

    public function seLogar(){
        echo "Logado";
    }
    public function seDeslogar(){
        echo "Tchau";
    }
    public function setNome($val){
        $this->nome = $val;
    }
    public function getNome(){
        return $this->nome;
    }
}

class Professor extends Usuario {  
    public function mudaNome(){
        $this->nome = 'Milan';
    }
}

class Turma {
    private $professor;

    public function setProfessor(Professor $prof){
        
    $this->professor = $prof;
    }
}

$luiz = new Professor;
$luiz->mudaNome();
echo $luiz->getNome();
$turma = new Turma;
$turma->setProfessor('Bono');