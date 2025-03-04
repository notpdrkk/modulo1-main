<?php

require_once "Humano.php";
class Vendedor extends Humano{
    public float $salario = 2000;
    public function __construct($nome,$idade,$endereco,$contato,$salario){
        parent::__construct($nome,$idade,$endereco,$contato);
    }
    
    public function Falar(){
        return ("sou das venda");
    }

    public function exibirSalario(){
        return("Eu ganho R$" . $this->salario . " por mes");
    }

}