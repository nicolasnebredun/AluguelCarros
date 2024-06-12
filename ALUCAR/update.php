<?php
require 'conexao.php';
?>

<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Atualizar Dados Alucar</title>
    <link rel="stylesheet" href="./style/alterar.css" />
</head>

<body>
    <nav id="menu">
        <div class="menu-navigation">
            <input type="checkbox" id="responsive-menu" onclick="updatemenu()" /><label></label>
            <ul>
                <li><a href="http://">Home</a></li>
                <li>
                    <a href="">Atualizar</a>
                </li>
                <li><a href="http://">Car List</a></li>
                <li>
                    <a class="dropdown-arrow" href="">Configurações</a>
                    <ul class="sub-menus">
                        <li><a href="http://">Carros</a></li>
                        <li><a href="http://">Locadores</a></li>
                        <li><a href="http://">Teste</a></li>
                    </ul>
                </li>
                <li><a href="index.html">Sair</a></li>
            </ul>
    </nav>
    <div class="header-name">
        <h1>Atualizar Dados Alucar</h1>
    </div>
    <div class="logo-img">
        <img src="./assets/alterarlogo.svg" alt="logo cor branco limao" />
    </div>
    <br>
    <div class="container"></div>

</body>

</html>