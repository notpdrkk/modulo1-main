<?php

class Pessoa 
{
    public $nome;
    public $idade;
    public $diaNascimento;
    public $mesNascimento;
    public $anoNascimento;
    
    public function __construct($nome, $diaNascimento, $mesNascimento, $anoNascimento)
    {
        $this->nome = $nome;
        $this->diaNascimento = $diaNascimento;
        $this->mesNascimento = $mesNascimento;
        $this->anoNascimento = $anoNascimento;
        $this->idade = 0; // Inicializa a idade como 0
    }

    public function calculaIdade($diaAtual, $mesAtual, $anoAtual)
    {
        $this->idade = $anoAtual - $this->anoNascimento;
        if ($this->mesNascimento > $mesAtual || ($this->mesNascimento == $mesAtual && $this->diaNascimento > $diaAtual)) {
            $this->idade--;
        }
    }

    public function informaIdade()
    {
        echo "Você tem: " . $this->idade . " anos\n";
    }

    public function informaNome()
    {
        echo "Seu nome é: " . $this->nome . "\n";
    }
}
?>
