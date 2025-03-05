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
require_once "Sapo.php";


// donos
$dono1 = new Humano ('Jair',69,'Rua Capitão Frederico Virmond, 222','(22)99821-7254');
$dono2 = new Humano ('Luiz',79,'Rua Marechal Floriano Peixoto, 13','(13)98872-9999');
$dono3 = new Humano ('Enéias',83,'Avenida Manoel Ribas, 01','(47)99985-2706');
$dono4 = new Humano ('Sérgio',55,'Rua Dezessete de Julho, 288', '(41)98212-2134');

// bichos
$animal1 = new Cachorro ('Carlinho','Bolso',4,2,'vermelho',5.00,'grande',$dono1);
$animal1->Falar();
print_r($animal1);
$animal2 = new Pombo ('Sergio','Honesto',2,2,'branco',1.00,'pequeno',$dono2);
$animal2->Falar();
print_r($animal2);
$animal3 = new Gato ('Ramiro','Gordinho',4,2,'preto',5.00,'grande',$dono3);
$animal3->Falar();
print_r($animal3);
$animal4 = new Sapo ('Marcelo','Cururu',4,2,'Verde-Musgo',2.00,'grande',$dono4);
$animal4->Falar();
print_r($animal4);

//funcionarios
$funcionario1 = new Vendedor ('Maicon',25,'Rua Guaíra, 87', '(42)99922-1221');
print_r($funcionario1);

$funcionario2 = new Balconista ('Claudia',32,'Rua Brigadeiro Rocha, 2322','(42)98821-2141');
print_r($funcionario2);

$funcionario3 = new Veterinario ('Jean',28,'Rua Professor Becker, 21','(42)99812-1231');
print_r($funcionario3);


// vendas
$venda1 = new Produto ('Ração', 5.50);
$venda1->exibirProduto();
print_r($venda1);

$venda2 = new Produto ('Biscoito pra gato', 7.50);
$venda2->exibirProduto();
print_r($venda2);

$venda3 = new Produto ('Alpiste', 9,45);
$venda3->exibirProduto();
print_r($venda3);

$venda4 = new Produto ('Comida pra sapo', 50.00);
$venda4->exibirProduto();
print_r($venda4);



