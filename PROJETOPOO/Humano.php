<?php

 class Humano {
    public string $nome; 
    public int $idade;
    public string $endereco;
    public string $contato;
   
    
    
    public function __construct($nome,$idade,$endereco,$contato){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->endereco = $endereco;
        $this->contato = $contato;
      
    }
    
    public function Falar(){
        return ("noggers");
    }

   
}

?>