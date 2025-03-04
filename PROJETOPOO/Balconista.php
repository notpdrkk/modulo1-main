<?php

require_once "Humano.php";
class Balconista extends Humano{
    public float $salario = 1500;
    public function __construct($nome,$idade,$endereco,$contato,$salario){
        parent::__construct($nome,$idade,$endereco,$contato);
    }
    
    public function Falar(){
        return ("sou do balcao");
    }

    public function exibirSalario(){
        return("Eu ganho R$" . $this->salario . " por mes");
    }

}