<?php 

# bom dia moaca!

echo"-----------------------------------------\n";
$salario = readline("Digite seu salário: ");
$kw_usado = readline("Quantos kW foram usados? ");
echo "\n--------------------------------------";
$kw_1 = (1518/7)/100; #2,16
$valor_kw_emreais = $kw_1*$kw_usado;

echo "\nSabe-se que 1 kW custa " . number_format($kw_1,2);
echo " então $kw_usado kW custam: R$", number_format($valor_kw_emreais, 2); 

$des = ($valor_kw_emreais/10);
$ok = readline("\nDigite OK para continuar ou SAIR para sair do aplicativo!");
if ($ok === "ok") {
    echo "\nCom um desconto de 10%, o valor final fica: R$" . number_format (($valor_kw_emreais - $des), 2);
    echo "\n Qual a forma de pagamento?";
    echo "\n-----------------------------------------";
}   else if ($ok === "sair") {
    echo "Volte sempre!";
    echo "\n----------------------------------------------";
    exit();
}


#usei esse if só pra brincar, queria ter usado o do-while mas derreti meu cerebro tentando
#nos proximos vou testar melhor
