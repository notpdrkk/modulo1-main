<?php

require_once "Pessoa.php";

$dataAtual = getdate();
$diaAtual = $dataAtual['mday'];
$mesAtual = $dataAtual['mon'];
$anoAtual = $dataAtual['year'];

$p1 = new Pessoa('Jailson', 29, 3, 2000);
$p1->calculaIdade($diaAtual, $mesAtual, $anoAtual);
$p1->informaNome();
$p1->informaIdade();
print_r ($p1);

$p2 = new Pessoa('Maria', 2, 9, 2014);
$p2->calculaIdade($diaAtual, $mesAtual, $anoAtual);
$p2->informaNome();
$p2->informaIdade();
print_r ($p2);

?>
