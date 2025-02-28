<?php


function multiplo (){
    global $numero; 
    $numero = readline ("Digite um número: ");
    if ($numero%4 == 0){
        echo "true\n";
    
    } else {
        echo "false\n";
     
    }
}
echo "Escolha uma opção:\n[1] Verificar se um número é múltiplo de 4.\n[2] True se for par e False se for impar\n";
$escolha = readline("Sua escolha: ");
switch ($escolha) {
    case 1:
      multiplo();
    break;
    default:
      exit("ERRO!");
}
