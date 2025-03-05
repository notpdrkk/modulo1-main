<?php

$numero = 0;
function multiplo ($a){
    $boolean = null;
    if ($a % 4 === 0){
        return ((bool)$boolean = true);
    
    } else {
        var_dump((bool)$boolean);
       
    }
}

function ImparOuPar(){
    global $numero;
    echo "Para saber se é par ou ímpar, ";
    $numero = readline ("digite um número: ");
    if ($numero%2 == 0){
        echo "É PAR!\n";
    } else {
        echo "É IMPAR\n";
    }
}

function somaEntreNumeros() {
    global $numero1, $numero2, $soma;
    $soma = 0;

    echo "\nPara saber a soma dos números entre dois números inteiros ";
    $numero1 = readline("primeiro digite um número: ");
    echo "\n";
    $numero2 = readline("Agora digite outro número: ");
    echo "\n";

    if ($numero1 >= 0 && $numero2 >= 0) {
        if ($numero1 < $numero2) {
            for ($i = $numero1 + 1; $i < $numero2; $i++) {
                $soma += $i;
            }
            echo "\nA soma dos números entre $numero1 e $numero2 é $soma!";
        } else {
            echo "\nO primeiro número deve ser menor que o segundo!";
        }
    } else {
        echo "ERRO! Os números devem ser positivos.\n";
    }
}

function tresNumeros(){
    global $numero1,$numero2,$numero3,$soma,$i;
    $numero1 = readline ("Digite um número maior que 1: ");
    $numero2 = readline ("Digite outro número: ");
    $numero3 = readline ("Digite um último número: ");
    $i = 0;

    if ($numero1 >= 1){
        for ($i = $numero2; $i <= $numero3; $i++){
            if($i%$numero1 == 0){
                $soma += $i;               
            }
           
    } 
        echo $soma;
    } else {
        exit('ERRO! O primeiro número deve ser maior ou igual a 1');
    }
}

function imc(){
    echo "Para calcular seu IMC, informe seu sexo: \n";
    echo " [1] Homem\n [2] Mulher\n";
    $sexo = readline("Escolha sua opção: ");
    switch ($sexo){
        case 1: 
            $altura = readline("Digite sua altura (EXEMPLO: 1.75): ");
            $imc = (72.7*$altura) - 58;
            echo "Seu IMC é ". number_format($imc,2);
            break;
        case 2: 
            $altura = readline("Digite sua altura (EXEMPLO: 1.75): ");
            $imc = (62.1*$altura) - 44.7;
            echo "Seu IMC é ". number_format($imc,2);
            break;
        default: 
            exit('ERRO!');
            break;

    }
}
// --------------------------------------------------------------------------------------------------------------------------------------
echo "Escolha uma opção:\n[1] Verificar se um número é múltiplo de 4.\n[2] True se for par e False se for impar.\n";
echo "[3] Ver a soma de números entre dois numeros inteiros.\n";
echo "[4] Ver a soma entre números entre B e C, por A\n";
echo "[5] Calcular seu IMC\n";
$escolha = readline("Sua escolha: ");
switch ($escolha) {
    case 1:
        $numero = readline("Digite um número: ");
        echo multiplo($numero);
        break;
    case 2:
        ImparOuPar();
        break;
    case 3:
        somaEntreNumeros();
        break;
    case 4:
        tresNumeros();
        break;
    case 5:
        imc();
        break;
    default:
      exit("ERRO!");
        break;
}
