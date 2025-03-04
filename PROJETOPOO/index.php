<?php

//$nome,$raca,$qtdPata,$qtdOlho,$cor,$peso,$tamanho,$dono
//$nome,$idade,$endereco,$contato,$salario
require_once "Humano.php";
require_once "Animal.php";
require_once "Produto.php";
require_once "Cachorro.php";
require_once "Gato.php";
require_once "Pombo.php";
require_once "Vendedor.php";
require_once "Veterinario.php";
require_once "Balconista.php";


$dono1 = new Humano ('Jair',69,'Rua Capitão Frederico Virmond, 222','22 9 9821 7254');
$dono2 = new Humano ('Luiz',79,'Rua Marechal Floriano Peixono, 13','13 9 8872 9999');
$dono3 = new Humano ('Eneias',83,'Avenida Manoel Ribas, 01','47 9 9985 2706');

$animal1 = new Cachorro ('Carlinho','Bolso',4,2,'vermelho',5,'grande',$dono1);
$animal2 = new Pombo ('Sergio','Honesto',2,2,'branco',1,'pequeno',$dono2, 'pouca', 'branco');
$animal3 = new Gato ('Ramiro','Meu Nome',3,2,'preto',0.75,'grande',$dono3);

$funcionario1 = new Vendedor ('Maicon',25,'Rua Guaíra, 87', '42 9 9922 1221');
$funcionario2 = new Balconista ('Claudia',32,'Rua Brigadeiro Rocha, 2322','42 9 8821 2141');
$funcionario3 = new Veterinario ('Jean',28,'Rua Professor Becker, 21','42 9 9812 1231');



