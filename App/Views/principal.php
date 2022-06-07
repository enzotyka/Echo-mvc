<?php
include('verifica_login.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Echo - Gerenciamento de frotas ecológico</title>

<!--================== LINKS ==================-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Signika&display=swap" rel="stylesheet">


</head>
<body>

    <!--================== SPLASH ==================-->


    <!--================== HEADER ==================-->
    <header>
        <nav class="navbar">
            <div class="nav-menu">
                <div class="logo">
                    <a href="index.php"><img src="svg/Logo.svg" alt="Echo"></a>
                </div>
                <div class="burger"><img src="svg/burg.svg"></div>
                <ul class="nav-list">
                    <li><a href="https://github.com/LuanODias/Echo" class="nav-link" style="border-bottom-left-radius: 40px; border-top-left-radius: 40px;">Projeto</a></li>
                    <li><a href="integrantes.php" class="nav-link">Integrantes</a></li>
                    <li><a href="carbono.php" class="nav-link" style="border-bottom-right-radius: 40px; border-top-right-radius: 40px;">Carbono</a></li>
                </ul>
            </div>
            <a href="login.php" class="btnAcessar">Sair</a>
        </nav>
    </header>
    


    <!--================== CONTAINER ==================-->
    <div class="container-principal">
        <div class="card-principal">
            <div class="card-image">
                <img src="img/imgveiculo.png">
            </div>
            <h3 class="name">Veiculos</h3>
            <p class="comment">
                Liste e organize os veículos de sua empresa  
                com eficácia e de maneira simples.
            </p>
            <a href="veiculos.php" class="btngerenciamento" style="margin-top: 59px;">Gerenciar</a>
        </div>
        <div class="card-principal">
            <div class="card-image">
                <img src="img/imgfuncionarios.png">
            </div>
            <h3 class="name">Funcionarios</h3>
            <p class="comment">
                Liste e organize os funcionários que utilizam 
                suas frotas de carro, para que sua empresa seja 
                mais organizada.
            </p>
            <a href="funcionarios.php" class="btngerenciamento">Gerenciar</a>
        </div>
        <div class="card-principal">
            <div class="card-image">
                <img src="img/imgchamados.png">
            </div>
            <h3 class="name">Chamados</h3>
            <p class="comment">
                Gerencie em chamados qual funcionário utilizou qual 
                veículo, para que assim sua empresa tenha total controle 
                administrativo.
            </p>
            <a href="chamados.php" class="btngerenciamento">Gerenciar</a>
        </div>
    </div>
    <a href="#" class="btnrelatorio">Relatórios</a>
    <img src="svg/Wave.svg" alt="Wave" class="waveprincipal">