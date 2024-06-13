<?php
require 'conexao.php';
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
    <?php
    if (isset($_GET['ID'])) {
        $idCliente = $_GET['ID'];
        $consulta = "SELECT * FROM cliente where ID ='$idCliente' ";
        $execultaConsulta = mysqli_query($conexao, $consulta);
        if (mysqli_num_rows($execultaConsulta) > 0) {
            $cliente = mysqli_fetch_array($execultaConsulta);

    ?>

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
                <h1>Alucar</h1>
            </div>
            <div class="logo-img">
                <img src="./assets/alterarlogo.svg" alt="logo cor branco limao" />
            </div>
            <div class="subheader-name">
                <h1>Atualizar Cliente</h1>
            </div>
            <div>
                <h1 class=" client-infos"> Primeiro Nome </h1>
                <h1 class=" client-infos"> Segundo Nome </h1>
                <h1 class=" client-infos"> Telefone </h1>
            </div>
            <br>
            <div class="container"></div>

            <div>
                <form id="form" class="formulario-edit" action="update.php" method="POST">
                    <input class="input-form" type="hidden" name="ident" value="<?= $cliente['ID'] ?>">
                    <input class="input-form" type="text" name="Nome" value="<?= $cliente['Nome'] ?>" required>
                    <input class="input-form" type="text" name="Sobrenome" value="<?= $cliente['Sobrenome'] ?>" required>
                    <input class="input-form" type="text" name="Telefone" value="<?= $cliente['Telefone'] ?>" required>
            </div>
            <div>
                <h1 class="confirmar"> Marque Para Confirmar </h1>
            </div>
            <div class="buttons">
                <button type="text" class="botao">Atualizar</button>
            </div>
            </form>
            <div class="buttons">
                <a href="delete.php?ID=<?= $cliente['ID'] ?>"> <button type="submit" class="botao-delete">Deletar</button>
                </a>
            </div>
            <div class=" toggle-switch">
                <input class="toggle-input" id="toggle" type="checkbox" required>
                <label class="toggle-label" for="toggle"></label>
            </div>




    <?php
        } else {
            echo "<h4>Cliente não encontrado</h4>";
        }
    } else {
        echo "ID não informado";
    }
    ?>
    <script src="./js/menu.js"></script>

</body>

</html>