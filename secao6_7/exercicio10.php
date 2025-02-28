<?php

function pagamento(){
    global $preço, $valor, $valorFinal;

    if($preço <= 20){
        $valor = $preço*0.45; 
        $valorFinal = $preço + $valor;
        echo "O valor final do produto vai ser R$: \n" . number_format($valorFinal, 2);
        echo "\n";
        exit();
        
    } else
        $valor = $preço*0.30;
        $valorFinal = $preço + $valor; 
        echo "O valor final do produto vai ser R$: " . number_format($valorFinal, 2);
        echo "\n";
        exit();
}


$produto = readline ("Qual produto gostaria de comprar? ");
$preço = readline ("Por quanto gostaria de vender? ");
pagamento();


