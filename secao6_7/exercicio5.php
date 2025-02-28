<?php

$idade = readline("Digite sua idade: ");
if ($idade >= 16 && $idade < 18) {
    echo "Você já pode votar!\n"; 
} elseif ($idade >= 18) {
    echo "Você já pode votar e já pode dirigir!\n";
} elseif ($idade < 16) {
    echo "Você ainda não pode votar!\n";
}
?>