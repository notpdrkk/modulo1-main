<?php 

class Animal {
    public string $nome;
    public string $raca;
    public int $qtdPata;
    public int $qtdOlho;
    public string $cor;
    public float $peso;
    public string $tamanho;
    public Humano $dono;
  
    public function __construct($nome,$raca,$qtdPata,$qtdOlho,$cor,$peso,$tamanho,$dono){
        $this->nome = $nome;
        $this->raca = $raca;
        $this->qtdPata = $qtdPata;
        $this->qtdOlho = $qtdOlho;
        $this->cor = $cor;
        $this->peso = $peso;
        $this->tamanho = $tamanho;
        $this->dono = $dono;
      
    }  
}