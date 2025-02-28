<?php

$numero1 = readline("Digite um número: ");
$numero2 = readline("Digite outro número: ");
if ($numero1 > $numero2) {
 echo "\n$numero1 é maior que $numero2\n";
} elseif ($numero1 < $numero2){
    echo "\n$numero2 é maior que $numero1\n";
} elseif ($numero1 == $numero2){
    echo "\nOs números não pode ser iguais!\n";
    exit();
}
?>