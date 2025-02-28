<?php
# perimetro
echo "-----------------------------------------\n";
$b = readline("Digite a base do retângulo: \n");
$a = readline("Digite a altura do retângulo: \n");
$p = ($b+$a)*2;

echo "O perimetro do retangulo é: ", $p;

# area
$area = ($a+$b);
echo "\nA área do retângulo é: ", $area;


# diagonal 

$diagonal = sqrt(pow($b, 2)+ pow($a, 2));
echo "\nA diagonal do retangulo é: ", $diagonal;
echo "\n-----------------------------------------";





