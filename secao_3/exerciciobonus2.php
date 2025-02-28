<?php

$numero = readline("Digite um número: "); 
$unidade = $numero % 10; 
$dezena = intdiv($numero, 10) %10; 
$centena = intdiv($numero, 100); 

echo "\nO inverso de $numero, é $unidade$dezena$centena!\n";