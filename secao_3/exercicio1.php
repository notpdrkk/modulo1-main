<?php 

echo "--------------------\n";
$num1 = (float)readline("Digite um número aqui: \n");
$num2 = (float)readline("Digite um número aqui: \n");
if($num2 != 0) {
    "echo $num2\n";
} else {
    echo "ERRO!\n";
    exit();
}

$res = ($num1/$num2);

echo "O resultado é: ", $res;
echo "\n";

$quo = ($num1%$num2);
echo "E o resto é: \n", $quo;
echo "\n";
echo "------------------------";