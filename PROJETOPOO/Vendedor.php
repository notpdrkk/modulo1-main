<?php

require_once "Humano.php";
class Vendedor extends Humano{

    public string $cargo = 'Vendedor';
    public float $salario = 2000;
    
    public function __construct($nome,$idade,$endereco,$contato){
        parent::__construct($nome,$idade,$endereco,$contato);
    }

    public function exibirSalario(){
        
       return ($this-> salario);
    }


}
