<?php

class Produto{
    public string $produto;
    public float $preco;

    public function __construct($produto,$preco){
        $this->produto = $produto;
        $this->preco = $preco;
       
    }

    public function exibirProduto(){
        echo "Qual produto deseja comprar? ";
        
    }
}