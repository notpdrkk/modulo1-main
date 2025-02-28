<?php
$numero = readline("Digite um número: ");
if ($numero < 10) { 
    echo "\nMenor que 10!\n";
} elseif ($numero == 10 ) {
    echo "\nÉ igual a 10!\n";
} else {
    echo "\nMaior que 10!\n";
}  
?>