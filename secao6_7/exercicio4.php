<?php

$nota1 = readline("Escreva sua primeira nota: ");
echo "\n";
$nota2 = readline("Escreva sua segunda nota: ");
$media = ($nota1 + $nota2)/2;
if ($media >=6) {
    echo "Sua média foi: ", $media;
    echo "\nVocê está aprovado!\n";
} else {
    echo "Sua média foi: ", $media;
    echo "\nVocê está reprovado!\n";
}
?>