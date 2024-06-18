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
  <?php
  if (isset($_GET['ID'])) {
    $idCliente = $_GET['ID'];
    $consulta = "SELECT * FROM cliente where ID ='$idCliente' ";
    $execultaConsulta = mysqli_query($conexao, $consulta);
    if (mysqli_num_rows($execultaConsulta) > 0) {
      $cliente = mysqli_fetch_array($execultaConsulta);

  ?>
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
            <div class="modal">
              <h2 class="modal-title">Preencha o formulário para alugar!</h2>
              <form class="formulario-edit" action="alugarCarroForm.php" method="POST">
                <div class="campo">
                  <input class="input-form" type="hidden" name="ID" value="<?=$idCliente?>">
                </div>
                <div class="campo">
                  <label for="DRetirada">Data Retirada:</label>
                  <input type="date" id="DRetirada" name="DRetirada" required>
                </div>
                <div class="campo">
                  <label for="DDevolucao">Data Devolução:</label>
                  <input type="date" id="DDevolucao" name="DDevolucao" required>
                </div>
                <div class="campo">
                  <label for="LRetirada">Local Retirada:</label>
                  <input type="text" id="LRetirada" name="LRetirada" required>
                </div>
                <div class="campo">
                  <label for="LDevolucao">Local Devolução:</label>
                  <input type="text" id="LDevolucao" name="LDevolucao" required>
                </div>
                <div class="campo">
                  <label for="HRetirada">Hora Retirada:</label>
                  <input type="time" id="HRetirada" name="HRetirada" required>
                </div>
                <div class="campo">
                  <label for="HDevolucao">Hora Devolução:</label>
                  <input type="time" id="HDevolucao" name="HDevolucao" required>
                </div>
                <div class="campo">
                  <label for="Carro">Carro:</label>
                  <input type="text" id="Carro" name="Carro" required>
                </div>
                <button class="btnsOK" type="submit" onclick="closeModal()">Alugar</button>
            </div>
            <div>
              <button type="submit" class="botao">Atualizar</button>
            </div>
            </form>
          </div>
        </div>
      </nav>
  <?php
    } else {
      header("Refresh: 1; url=login.php");
    }
  } else {
    header("Refresh: 1; url=login.php");
  }
  ?>
  <script src="./js/modal.js"></script>

</body>

</html>