<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Aluguel</title>
    <style>

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
