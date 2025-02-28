<?php

$numero = "";
$soma = 0;
$quantos = 0;

while ($numero != 0) {
    $numero = readline("Digite um número ou digite 0 pra parar: ");
    $soma += $numero;
    $quantos++;
} 
$media = $soma / $quantos;
echo "\nA soma dos valores é $soma\n";
echo "A média desses valores é $media\n";
echo "O número de valores foi $quantos\n";