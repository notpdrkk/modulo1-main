<?php

require_once "Humano.php";
class Balconista extends Humano{

    public string $cargo = 'Balconista';
    public float $salario = 1500;
    public function __construct($nome,$idade,$endereco,$contato)
    {
        parent::__construct($nome,$idade,$endereco,$contato);
    }

    public function exibirSalario(){
        
        return ($this-> salario);
     }

}