<?php 

echo "-----------------------\n";
$pd = readline("\nDigite o valor do produto: "); 
$por = ($pd /100);

echo "O valor do produto sofreu reajuste de +1%.\n"; 
echo "Valor final: ", ($pd+$por);
echo "\n-----------------------\n";
?>php