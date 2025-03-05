<?php 

require_once "Animal.php";
class Sapo extends Animal{
    public function __construct($nome,$raca,$qtdPata,$qtdOlho,$cor,$peso,$tamanho,$dono){
        parent::__construct($nome,$raca,$qtdPata,$qtdOlho,$cor,$peso,$tamanho,$dono);
    }

    public function Falar(){
        echo "FROGGERS!\n";
    }
}