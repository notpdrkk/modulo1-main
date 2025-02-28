<?php

$contador = 10;
$parar = 0;
$valor = 0;
$soma = 0;

do 
{
    $valor = readline ("Digite um número: ");
    $parar++;
    $soma += $valor;

} while ($parar < 10);

$media = $soma/10; 
echo "\n";
echo "\nA soma é: ",$soma;
echo "\nA média é: ", $media;
echo "\n";