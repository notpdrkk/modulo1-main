<?php

$numero = 0;
$soma = 0;
$quantos = 0;
$media = 0;
while ($numero%2 == 0){
    $numero = readline("Digite um numero: ");
    if($numero >= 50 && $numero <=70){
        $soma += $numero;
        $quantos++;
        $media = $soma / $quantos;
      
    } else {
        echo "\nForam $quantos valores, a soma é $soma e a média é $media!\n";
    }
}   
echo "\nApenas números pares!\n";

