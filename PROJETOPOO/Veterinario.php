<?php

require_once "Humano.php";
class Veterinario extends Humano{

    public string $cargo = 'Veterinário';
    public float $salario = 3000;
    public function __construct($nome,$idade,$endereco,$contato){
      
        parent::__construct($nome,$idade,$endereco,$contato);
    }

    public function exibirSalario(){
        
        return ($this-> salario);
     }
    }     