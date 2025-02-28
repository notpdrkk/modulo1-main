<?php

$numeroMaior = PHP_INT_MIN;
$numeroMenor = PHP_INT_MAX;


while (true) {
 $numero = readline("Digite um número: ");
 if ($numero == 0){
     break;
    } 
if ($numero > $numeroMaior){
    $numeroMaior = $numero;
      
}
if ($numero < $numeroMenor){
    $numeroMenor = $numero;

}
}

if ($numeroMaior != PHP_INT_MIN && $numeroMenor != PHP_INT_MAX){
    echo "O maior é o numero $numeroMaior!\nO menor é $numeroMenor!\n";
}