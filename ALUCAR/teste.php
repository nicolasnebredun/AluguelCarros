<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Aluguel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        #menu {
            background-color: #333;
            overflow: hidden;
        }
        .menu-navigation {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 14px 16px;
        }
        #menu ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
        }
        #menu ul li {
            float: left;
        }
        #menu ul li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        #menu ul li a:hover {
            background-color: #111;
        }
        #menu .sub-menus {
            display: none;
            position: absolute;
            background-color: #333;
        }
        #menu .sub-menus li {
            float: none;
        }
        #menu ul li:hover .sub-menus {
            display: block;
        }
        #menu .dropdown-arrow::after {
            content: " ▼";
        }
        #searchContainer {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        #searchContainer input[type="text"] {
            padding: 5px;
            width: 300px;
            border-radius: 5px 0 0 5px;
            border: solid 1px #ccc;
            margin-right: -1px; /* Remove o espaço entre a borda do input e do botão */
        }
        #searchContainer button {
            padding: 5px 10px;
            background-color: #5F9EA0;
            color: white;
            border: none;
            border-radius: 0 5px 5px 0;
            font-weight: bold;
            cursor: pointer;
            height: 32px;
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        .botao {
            padding: 5px 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <nav id="menu">
        <div class="menu-navigation">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Refresh</a></li>
                <li><a href="#">Car List</a></li>
                <li>
                    <a class="dropdown-arrow" href="orderlist.php">Configurações</a>
                    <ul class="sub-menus">
                        <li><a href="#">Quem somos</a></li>
                        <li><a href="#">O que fazemos</a></li>
                        <li><a href="#">Alugue seu carro</a></li>
                    </ul>
                </li>
                <li><a href="index.ht">Sair</a></li>
            </ul>
            <div id="searchContainer">
                <form method="GET" action="">
                    <select name="plataforma" id="plataforma" required>
                        <option value="">Selecione a Plataforma</option>
                        <option value="ID">ID</option>
                        <option value="Nome">Nome</option>
                        <option value="CPF">CPF</option>
                    </select>
                    <input type="text" id="query" name="query" placeholder="Digite o texto para buscar" required>
                    <button type="submit" class="botao_busca">Buscar</button>
                </form>
            </div>
        </div>
    </nav>

    <h1>Buscar Aluguel</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>CPF</th>
                <th>Telefone</th>
                <th>QDias</th>
                <th>LRetirada</th>
                <th>LDevolucao</th>
                <th>HRetirada</th>
                <th>HDevolucao</th>
                <th>Carro</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($_GET['plataforma']) && isset($_GET['query']) && !empty($_GET['plataforma']) && !empty($_GET['query'])) {
                $conexao = mysqli_connect("localhost", "root", "", "alucar");

                if (!$conexao) {
                    die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
                }

                $plataforma = mysqli_real_escape_string($conexao, $_GET['plataforma']);
                $query = mysqli_real_escape_string($conexao, $_GET['query']);
                $consulta = "SELECT * FROM aluguel WHERE $plataforma LIKE '%$query%'";
                $executaConsulta = mysqli_query($conexao, $consulta);

                if ($executaConsulta) {
                    if (mysqli_num_rows($executaConsulta) > 0) {
                        foreach ($executaConsulta as $alugueis) {
                            echo "<tr>
                                <td>{$alugueis['ID']}</td>
                                <td>{$alugueis['Nome']}</td>
                                <td>{$alugueis['CPF']}</td>
                                <td>{$alugueis['Telefone']}</td>
                                <td>{$alugueis['QDias']}</td>
                                <td>{$alugueis['LRetirada']}</td>
                                <td>{$alugueis['LDevolucao']}</td>
                                <td>{$alugueis['HRetirada']}</td>
                                <td>{$alugueis['HDevolucao']}</td>
                                <td>{$alugueis['Carro']}</td>
                                <td><a class='botao' href='update.php?id={$alugueis['ID']}'>Alterar</a></td>
                            </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='11'>Nenhum resultado encontrado</td></tr>";
                    }
                } else {
                    echo "Erro na consulta: " . mysqli_error($conexao);
                }

                mysqli_close($conexao);
            }
            ?>
        </tbody>
    </table>
</body>
</html>
