<?php

require_once "Animal.php";
class Pombo extends Animal{
    public string $bico;
    public string $pena;
    public function __construct($nome,$raca,$qtdPata,$qtdOlho,$cor,$peso,$tamanho,$dono,$pena,$bico)
    {
        parent::__construct($nome,$raca,$qtdPata,$qtdOlho,$cor,$peso,$tamanho,$dono);
    }

    public function Falar(){
        return ("Pru");
    }
}


