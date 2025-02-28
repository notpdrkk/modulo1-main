<?php

$numero = readline("Digite um número: ");
if ($numero >= 30 && $numero <= 90) {
    echo "Está entre 30 e 90!\n";
} elseif ($numero >= 120) {
    echo "É maior que 120!\n";
} elseif ($numero < 30){
    echo "Não se encaixa em nenhum dos dois!\n";
} elseif ($numero < 120){
    echo "Não se encaixa em nenhum dos dois!\n";
}
?>
