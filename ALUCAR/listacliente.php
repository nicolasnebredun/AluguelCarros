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
    <div id="searchContainer">
        <form method="GET" action="">
            <select class="filtro" name="filtro" id="filtro" required>
                <option value="">Selecione o Tipo de Procura</option>
                <option value="ID">ID</option>
                <option value="Nome">Nome</option>
                <option value="CPF">CPF</option>
            </select>
            <input type="text" id="query" name="query" placeholder="Digite o texto para buscar" required>
            <button type="submit" class="botao_busca">Buscar</button>
        </form>
    </div>
    </div>
    <table class="greenTable">
        <thead>

            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>CPF</th>
                <th>Telefone</th>
                <th>Alterar</th>
            </tr>
        </thead>
        <tbody>
            <?php

            if (isset($_GET['filtro']) && isset($_GET['query']) && !empty($_GET['filtro']) && !empty($_GET['query'])) {
                $conexao = mysqli_connect("localhost", "root", "root", "alucar");

                if (!$conexao) {
                    die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
                }

                $filtro = mysqli_real_escape_string($conexao, $_GET['filtro']);
                $query = mysqli_real_escape_string($conexao, $_GET['query']);
                $consulta2 = "SELECT * FROM cliente WHERE $filtro LIKE '%$query%'";
                $consulta = "SELECT * FROM cliente WHERE $filtro LIKE '%$query%'";
                $executaConsulta = mysqli_query($conexao, $consulta);


                if (mysqli_num_rows($executaConsulta) > 0) {
                    foreach ($executaConsulta as $clientes) {
                        echo "<tr>
                            <td>{$clientes['ID']}</td>
                            <td>{$clientes['Nome']}</td>
                            <td>{$clientes['Sobrenome']}</td>
                            <td>{$clientes['CPF']}</td>
                            <td>{$clientes['Telefone']}</td>
                            <td><a class='botao' href='alterarcliente.php?ID={$clientes['ID']}'>Alterar</a></td>
                        </tr>";
                    }
                } elseif (mysqli_num_rows($executaConsulta) <= 0) {

                    // Consulta $executaConsulta retornou zero linhas, mostrando todos os dados do banco
                    echo "<tr><td colspan='65'>Nenhum resultado encontrado, Tente novamente realizar a Pesquisa!</td></tr>";
                }
                mysqli_close($conexao);
            }
            ?>
        </tbody>
        <?php
        ?>
        </tbody>
    </table>
    <script src="./js/menu.js"></script>
</body>

</html>