<?php

require_once "Humano.php";
class Veterinario extends Humano{
    public float $salario = 3000;
    public function __construct($nome,$idade,$endereco,$contato,$salario){
        parent::__construct($nome,$idade,$endereco,$contato);
    }
    public function falar(){
        return("eu lido cos bichos,");
    }

    public function exibirSalario(){
        return("Eu ganho R$$salario por mes");
    }

}