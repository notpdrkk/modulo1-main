<?php

$num1 = 0;
$num2 = 0;
$soma = 0;
$subtracao = 0;
$multiplicacao = 0;
$divisao = 0;


function soma($num1, $num2)
{
    global $num1, $num2, $soma;
    $soma = $num1 + $num2;
    echo "\n";
    echo $soma;
    echo "\n----------------------------------\n";
}
function subtracao($num1, $num2)
{
    global $num1, $num2, $subtracao;
    $subtracao = $num1 - $num2;
    echo "\n";
    echo $subtracao;
    echo "\n----------------------------------\n";
}
function multiplicacao($num1, $num2)
{
    global $num1, $num2, $multiplicacao;
    $multiplicacao = $num1 * $num2;
    echo "\n";
    echo $multiplicacao;
    echo "\n----------------------------------\n";
}
function divisao($num1, $num2)
{
    global $num1, $num2, $divisao;
    if ($num2 == 0){
        echo "ERRO!\n";
        exit();
} else {
    $divisao = $num1 / $num2;
    echo "\n";
    echo $divisao;
    echo "\n----------------------------------\n";
}
}


echo "\n----------------------------------\n";
$num1 = readline("Digite um número: ");
$num2 = readline("Digite outro número: ");
echo "\nEscolha a operação: ";
echo "\n[1] Soma\n[2] Subtração\n[3] Multiplicação\n[4] Divisão\n";
$escolha = readline("Sua escolha: ");
switch ($escolha) {
    case 1:
        soma($num1, $num2);
        break;
    case 2:
        subtracao($num1, $num2);
        break;
    case 3:
        multiplicacao($num1, $num2);
        break;
    case 4:
        divisao($num1, $num2);
        break;
    default:
        echo "ERRO!";
        break;
}
