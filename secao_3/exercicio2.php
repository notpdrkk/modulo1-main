<?php
echo "---------------------------\n";
$n1 = readline("Digite um número: \n");
$n2 = readline("Digite um número: \n");
$n3 = readline("Digite um número: \n");
$n4 = readline("Digite um número: \n");
$p1 = 1;
$p2 = 2;
$p3 = 3;
$p4 = 4;

$soma = ($n1*$p1+$n2*$p2+$n3*$p3+$n4*$p4)/($p1+$p2+$p3+$p4);

echo "A média ponderada é: \n", $soma;
echo "\n---------------------------\n";
