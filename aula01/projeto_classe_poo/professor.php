<?php
require_once 'usuario.php';
//Classe filha-professor
class professor extends usuario {
    private $disciplina;

    public function __construct($nome, $email, $disciplina) {
        parent::__construct($nome, $email);
        $this->disciplina = $disciplina;
    }

    public function getDisciplina() {
        return $this->disciplina;
    }

    public function darAula() {
        return "{$this->nome} está dando aula de {$this->disciplina}."; 
    }
}