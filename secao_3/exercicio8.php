<?php

echo "---------------------------------------\n";

$salario = readline("Digite seu salário base: \n");
$carrosVendidos = readline("Digite quantos carros você vendeu: \n");
$comissao1 = readline("Qual a sua comissão? \n");
$vendas = readline("E quanto você vendeu? \n");


$comissao2 = $carrosVendidos*$comissao1;
$vendas5 = $vendas * 0.05;

$pagamento = $salario+$comissao2+$vendas5; 
echo "\nParabéns! O seu pagamento é: R$", $pagamento;
echo "\n--------------------------------------\n";