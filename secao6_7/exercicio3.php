<?php

$macas = readline("Quantas maças voce quer comprar? \n");
if ($macas <= 6)
{
    echo "$macas maças vão custar: R$", number_format($macas*1.30, 2);
    echo "\n";

} elseif ($macas >= 12)
{
    echo "$macas maças vão custar: R$", number_format($macas*1.00,2);
    echo "\n";
}

?>
