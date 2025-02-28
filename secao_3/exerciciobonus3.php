<?php

// inversão
$numero = readline("Digite um número de 3 digitos: \n"); // 123
$unidade = $numero % 10;  // 3
$dezena = intdiv($numero, num2: 10) % 10; // 2
$centena = intdiv($numero, 100); // 1

// 321


// soma 
$soma = $unidade . '' . $dezena . '' . $centena; // 3 2 1  

// multiplicação
$$unidade = $soma % 10; 
$$dezena = intdiv($soma, 10) %10; 
$$centena = intdiv($soma, 100); 

$multiplicacao1 = $$unidade *1;
$multiplicacao2 = $$dezena *2;
$multiplicacao3 = $$centena *3;




echo "o digito verificador é: ", $$centena;
echo "\n";