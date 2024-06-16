<?php
require 'conexao.php';
?>

<!DOCTYPE html>
<html lang="en">

<?php
$client_id = $_GET['ID'];

$exclusao_alugueis = "DELETE from alugueis WHERE cliente_id ='$client_id'";
$exclusao_client = "DELETE from cliente WHERE ID ='$client_id'";

$execultaExclusao_alugueis = mysqli_query($conexao, $exclusao_alugueis);
$execultaExclusao_client = mysqli_query($conexao, $exclusao_client);

if ($execultaExclusao_alugueis && $execultaExclusao_client) {
    header("Refresh: 5; url=orderlist.php");
} else {

    header("Refresh: 5; url=FALHA.php");
}
?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style/loader.css">
</head>

<body>
    <div class="loader"> Redirecionando...</div>
    <div id="myProgress">
        <div id="myBar"></div>
    </div>
    <script>
        setTimeout(function() {
            if (confirm("Você Deletou o registro!")) {
                txt = "Você Deletou o registro!";
            } else {
                txt = "O Cliente não foi Deletado, Algo de Errado Aconteceu.";
            }
        }, 4000);
    </script>
</body>

</html>