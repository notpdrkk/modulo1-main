<?php

// bom dia moaca

function login(){
    global $login;
   
    echo "Bem vindo!";
    echo "\n[1]Entrar\n[2]Sair\n";
    $login = readline("Sua escolha: ");
    switch ($login){
        case 1:
            menu();
            break;
        case 2: 
            exit("Até mais!\n");
    }

}
function menu ()
{
    global $produto, $preço;
  
    echo "Bem vindo!\n";
    $produto = readline ("Qual produto deseja comprar? "); //tenis   
    $preço = readline("Qual o preço do produto $produto? "); // 200
    echo "\n---------------------------\n";
    pagamento();
} 
function pagamento()
{
    global $produto, $preço, $pagamento, $desconto, $valorFinal, $parcelas, $juros;


    echo "Escolha como deseja pagar!\n";
    echo "[1] R$$preço à vista em dinheiro com 10% de desconto\n";
    echo "[2] R$$preço à vista no cartão com 5% de desconto\n";
    echo "[3] R$$preço em 2 vezes, preço normal da etiqueta\n";
    echo "[4] R$$preço em 3 vezes, preço normal da etiqueta com juros de 10%\n";
    $pagamento = readline ("Sua escolha: \n");

    switch ($pagamento){
        case 1: 
            echo "---------------------------------\n";
            echo "Você optou por à vista em dinheiro com 10% de desconto!\n";
            $desconto = $preço/10;
            $valorFinal = $preço - $desconto;
            echo "O produto $produto com 10% de desconto fica por R$$valorFinal!\n";
            echo "---------------------------------\n";
            menu();
            break;
        case 2: 
            echo "---------------------------------\n";
            echo "Você optou por à vista no cartão com 5% de desconto!\n";
            $desconto = $preço/5;
            $valorFinal = $preço - $desconto; 
            echo "O produto $produto com 5% de desconto fica por R$$valorFinal!\n";
            echo "---------------------------------\n";
            menu();
            break;
        case 3:
           
            echo "---------------------------------\n";
            echo "Você optou por pagar em 2 vezes!\n";
            $parcelas = $preço/2;
            echo "Primeira parcela, daqui 30 dias: R$$parcelas\n";
            echo "Segunda parcela, daqui 60 dias: R$$parcelas,2)\n";
            echo "\n---------------------------------\n";
            menu();
            break; 
        
        case 4:
          
            echo "---------------------------------\n";
            echo "Você optou por pagar em 3 vezes!\n";
            $parcelas = $preço/3+$preço/10;
            echo "Primeira parcela, daqui 30 dias: R$" .number_format($parcelas,2);
            echo "\nSegunda parcela, daqui 60 dias: R$" .number_format($parcelas,2);
            echo "\nTerceira parcela, daqui 90 dias: R$" .number_format($parcelas,2);
            echo "\n---------------------------------\n";
            menu();
            break; 
        default:
        echo "ERRO!";
        menu();
    }

}

login();
?>
