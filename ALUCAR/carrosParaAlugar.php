<?php
require 'conexao.php';
?>

<html lang="pt-BR">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="stylesheet" href="./style/style.css" />
  <link rel="stylesheet" href="./style/styleguide.css" />
  <link rel="stylesheet" href="./style/divtable.css" />
  <link rel="stylesheet" href="./style/busca.css" />
  <link rel="stylesheet" href="./style/teste.css" />
  <link rel="stylesheet" href="./style/buscaclass.css" />
  <link rel="stylesheet" href="./style/paraalugar.css">
  <title>Listagem de Clientes</title>
</head>

<body>

  </div>
  <div class="logo-img">
    <img src="./assets/LOGO SIMBOLO - BRANCO.svg" alt="logo cor branco limao" />
  </div>
  <nav id="menu">
    <div class="menu-navigation">
      <input type="checkbox" id="responsive-menu" onclick="updatemenu()" /><label></label>
      <ul>
        <li><a href="./index.html">Home</a></li>
        <li>
          <a href="">Atualizar</a>
        </li>
        <li><a href="./carrosParaAlugar.php">Car List</a></li>
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

    <header>
    <div class="logo">
    </div>
  </header>
    <div class="welcome-section">
        <h1>Carros disponíveis para aluguel!</h1>
    </div>
    <div class="car-section">
        <div class="car-box">
            <img src="./assets/Rectangle 5.png" alt="Fiat uno - 1.6">
            <h2>Fiat uno - 1.6</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <button>Alugar este carro</button>
        </div>
        <div class="car-box">
            <img src="./assets/Rectangle 5-1.png" alt="Fiat uno - 1.6">
            <h2>Fiat uno - 1.6</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <button>Alugar este carro</button>
        </div>
        <div class="car-box">
            <img src="./assets/Rectangle 5-2.png" alt="Fiat uno - 1.6">
            <h2>Fiat uno - 1.6</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <button>Alugar este carro</button>
        </div>
    </div>
  </nav>