<?php

//bom dia moaca

$vendas = [];
$users = [
    [
        "user" => "admin",
        "password" => "1234"
    ]
];
$isLoggedIn = false;
$produtos = [];
$eventos = [];

function login()
{
    global $users;
    global $isLoggedIn;
    global $escolhaMenu;
    global $primeiraescolha;

    echo " \n------------------------------\n";
    echo "Seja muito bem vindo(a)!\n";
    echo "[1]Entrar\n[2]Sair\n";
    $primeiraescolha = readline("\nSua escolha: ");

    switch ($primeiraescolha) {
        case "1":
            echo "Faça o login. \n";
            $user = readline("Usuário: ");
            echo "------------------------------\n";
            $password = readline("Senha: ");

            $userFound = false;
            foreach ($users as $usuario) {
                if ($user == $usuario['user'] && $password == $usuario['password']) {
                    $isLoggedIn = true;
                    echo "Login realizado!\n";
                    consoleLog("O usuário $user foi cadastrado!\n");
                    menuLogin();
                    $userFound = true;
                    break;
                }
            }

            if (!$userFound) {
            
                echo "Login inválido!\n";
                login();
            }
            break;

        case "2":
            echo "Até logo!\n";
            exit();

        default:
            echo "ERRO! Opção inválida.\n";
            break;
    }
}

function consoleLog($msgLog)
{
    global $eventos, $horarioLog;
    date_default_timezone_set('America/Sao_Paulo');
    $horarioLog = date('d-m-Y H:i:s');
    $eventos[] = "[$horarioLog] $msgLog\n";
}

function historicoEventos()
{
    global $eventos, $voltar, $user;


    echo "------------------------------\n";
    foreach ($eventos as $evento) {
        echo "$evento\n";
    }
    echo "------------------------------\n";
    echo "Deseja voltar?\n[1]sim\n[2]não\n";
    $voltar = readline("");
    if ($voltar == 1) {
        consoleLog("O $user saiu do console!\n");
        menuLogin();
    } elseif ($voltar == 2) {
        historicoEventos();
    } else {
        echo "ERRO!";
        historicoEventos();
    }
}

function menuLogin()
{
    global $escolhaMenu, $isLoggedIn, $user;
    if ($isLoggedIn) {
    
        echo "---------------------------------------------\n";
        consoleLog("O usuário $user entrou no menu de login!");
        echo "\nBem vindo!\n";
        echo " [1] Vender\n [2] Cadastrar novo usuário\n [3] Console\n [4] Deslogar\n";
        $escolhaMenu = readline("Escolha uma opção: ");
        mainMenu($escolhaMenu);
        consoleLog("O $user escolheu a opção $escolhaMenu");
    }
}

function mainMenu($escolhaMenu)
{
    global $user, $users, $dinheiroCaixa, $dinheiroCliente, $soma, $troco, $faltaDinheiro;

    switch ($escolhaMenu) {
        case "1":
            $dinheiroCaixa = readline("Quanto de dinheiro tem no caixa? ");
            echo "Qual produto deseja vender? ";
            $produtos = readline();
            $unidades = readline("Quantas unidades? ");
            $valorUnidade = readline("Quanto custa a unidade? ");
            $dinheiroCliente = readline("Quanto de dinheiro o cliente deu? ");
            $soma = $valorUnidade * $unidades;
            $troco = $dinheiroCliente - $soma;
            $faltaDinheiro = $soma - $dinheiroCliente;

            if ($dinheiroCliente > $soma) {
                if ($troco > $dinheiroCaixa) {
                    echo "VENDA CANCELADA POR FALTA DE TROCO!\n";
                } else {
                    echo "Aqui está seu troco de R$$troco! Tenha um ótimo dia!\n";
                    consoleLog("O usuário $user vendeu $unidades $produtos por R$$soma!\n");
                }
            } elseif ($dinheiroCliente == $soma) {
                echo "Tenha um ótimo dia!\n";
                consoleLog("O usuário $user vendeu $unidades $produtos por R$$soma!\n");
            } else {
                echo "Está faltando R$$faltaDinheiro! Venda CANCELADA!\n";
            }

            menuLogin();
            break;
        case "2":
            echo "Digite um login para cadastrar um novo usuário: ";
            $newUser = readline();
            echo "Digite uma senha: ";
            $newPassword = readline();
            $users[] = ["user" => $newUser, "password" => $newPassword];
            echo "Usuário cadastrado com sucesso! \o/\n";
            consoleLog("O usuário $newUser foi cadastrado!\n");
            menuLogin();
            break;

        case "3":
            historicoEventos();
            consoleLog("O $user entrou no console!\n");
            break;

        case "4":
            echo "Até mais, $user!";
            login();
            break;

        default:
            echo "ERRO!";
            break;
    }
}

login();