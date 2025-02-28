<?php

$idade = readline("Digite sua idade: ");
if ($idade < 5){
    echo "Essa criança não pode nadar ainda!\n";
} elseif ($idade >= 5 && $idade <= 7){
    echo "O nadador é da categoria Infantil A\n";
} elseif ($idade >= 8 && $idade <= 10){
    echo "O nadador é da categoria Infantil B\n";
} elseif ($idade >= 11&& $idade <= 13){
    echo "O nadador é da categoria Juvenil A\n";
} elseif ($idade >= 14&& $idade <= 17){
    echo "O nadador é da categoria Juvenil B\n";
} elseif ($idade >= 18){
    echo "O nadador é da categoria Sênior\n";
}   
?>