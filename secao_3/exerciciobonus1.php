<?php

// bom dia moaca
date_default_timezone_set('America/Sao_Paulo');
$hora = date("H:i");

$mnts = $hora*60;

echo "Agora são ", $hora;
echo "\nJá se passaram $mnts minutos desde 00h!\n";