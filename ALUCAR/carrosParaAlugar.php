<?php
require 'conexao.php';
?>

<html lang="pt-BR">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <!-- <link rel="stylesheet" href="./style/style.css" /> -->
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
      <div class="mainThings">
        <div class="welcome-section">
          <h1>Carros disponíveis para aluguel!</h1>
        </div>
        <div class="car-section">
          <div class="car-box">
            <div class="carImages">
              <img src="./assets/Fiat-Uno-16-mpi.png" alt="Fiat uno - 1.6">
            </div>
            <div class="texts">
              <h2 class="car-title">Fiat uno - 1.6</h2>
              <p class="car-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              <button class="car-button" onclick="openModal()">Alugar este carro</button>
            </div>
          </div>
          <div class="car-box">
            <div class="carImages">
              <img src="./assets/fiat-strada-2021-cabine-simples.png" alt="Strada - 2.0">
            </div>
            <div class="texts">
              <h2 class="car-title">Strada - 2.0</h2>
              <p class="car-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              <button class="car-button" onclick="openModal()">Alugar este carro</button>
            </div>
          </div>
          <div class="car-box">
            <div class="carImages">
              <img src="./assets/Rectangle 5-2.png" alt="Fiat uno - 1.6">
            </div>
            <div class="texts">
              <h2 class="car-title">Fiat uno - 1.6</h2>
              <p class="car-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              <button class="car-button" onclick="openModal()">Alugar este carro</button>
            </div>
          </div>
          <div class="car-box">
            <div class="carImages">
              <img src="./assets/Fiat-Uno-16-mpi.png" alt="Fiat uno - 1.6">
            </div>
            <div class="texts">
              <h2 class="car-title">Fiat uno - 1.6</h2>
              <p class="car-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              <button class="car-button" onclick="openModal()">Alugar este carro</button>
            </div>
          </div>
          <div class="car-box">
            <div class="carImages">
              <img src="./assets/fiat-strada-2021-cabine-simples.png" alt="Strada - 2.0">
            </div>
            <div class="texts">
              <h2 class="car-title">Strada - 2.0</h2>
              <p class="car-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              <button class="car-button" onclick="openModal()">Alugar este carro</button>
            </div>
          </div>
          <div class="car-box">
            <div class="carImages">
              <img src="./assets/Fiat-Argo1.0-2023-1.png" alt="Fiat Argo - 1.0">
            </div>
            <div class="texts">
              <h2 class="car-title">Fiat Argo - 1.0</h2>
              <p class="car-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              <button class="car-button" onclick="openModal()">Alugar este carro</button>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-container">
        <?php
        if (!isset($_POST['nome']) || !isset($_POST['cpf']) || !isset($_POST['telefone']) || !isset($_POST['qDias']) || !isset($_POST['dRetirada']) || !isset($_POST['dDevolucao']) || !isset($_POST['lRetirada']) || !isset($_POST['lDevolucao']) || !isset($_POST['hRetirada']) || !isset($_POST['hDevolucao']) || !isset($_POST['carro'])) {
          echo '<div class="modal">';
          echo '<h2>Preencha o formulário para alugar!</h2>';
          echo '<hr>';
          echo '<form action="conexao.php" method="post">';
          echo '<div class="campo">';
          echo '<label for="nome">Nome Completo:</label>';
          echo '<input type="text" id="nome" name="nome" required>';
          echo '</div>';
          echo '<div class="campo">';
          echo '<label for="cpf">CPF:</label>';
          echo '<input type="text" id="cpf" name="cpf" required>';
          echo '</div>';
          echo '<div class="campo">';
          echo '<label for="telefone">Telefone:</label>';
          echo '<input type="tel" id="telefone" name="telefone" required>';
          echo '</div>';
          echo '<div class="campo">';
          echo '<label for="qDias">Dias Alugados:</label>';
          echo '<input type="number" id="qDias" name="qDias" min="1" required>';
          echo '</div>';
          echo '<div class="campo">';
          echo '<label for="dRetirada">Data Retirada:</label>';
          echo '<input type="date" id="dRetirada" name="dRetirada" required>';
          echo '</div>';
          echo '<div class="campo">';
          echo '<label for="dDevolucao">Data Devolução:</label>';
          echo '<input type="date" id="dDevolucao" name="dDevolucao" required>';
          echo '</div>';
          echo '<div class="campo">';
          echo '<label for="lRetirada">Local Retirada:</label>';
          echo '<input type="text" id="lRetirada" name="lRetirada" required>';
          echo '</div>';
          echo '<div class="campo">';
          echo '<label for="lDevolucao">Local Devolução:</label>';
          echo '<input type="text" id="lDevolucao" name="lDevolucao" required>';
          echo '</div>';
          echo '<div class="campo">';
          echo '<label for="hRetirada">Hora Retirada:</label>';
          echo '<input type="time" id="hRetirada" name="hRetirada" required>';
          echo '</div>';
          echo '<div class="campo">';
          echo '<label for="hDevolucao">Hora Devolução:</label>';
          echo '<input type="time" id="hDevolucao" name="hDevolucao" required>';
          echo '</div>';
          echo '<button class="btnsOK" type="submit" onclick="closeModal()">Alugar</button>';
          echo '</form>';
          echo '</div>';
        }
        ?>
      </div>
  </nav>
  <script src="./js/modal.js"></script>

</body>

</html>