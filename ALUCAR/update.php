<?php
require 'conexao.php';
?>

<!DOCTYPE html>
<html lang="en">

<?php
$Id = $_POST['ID'];
$Nome = $_POST['Nome'];
$Sobrenome = $_POST['Sobrenome'];
$Telefone = $_POST['Telefone'];
$alteracao = "UPDATE cliente SET Nome='$Nome', Sobrenome='$Sobrenome',
Telefone='$Telefone' WHERE ID ='$Id' ";
$execultaAlteracao = mysqli_query($conexao, $alteracao);
if ($execultaAlteracao) {

    header("Refresh: 5; url=listacliente.php");
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
            if (confirm("Você Alterou o Registro!")) {
                txt = "Você Deletou o registro!";
            } else {
                txt = "O Cliente não foi Atualizado, Algo de Errado Aconteceu.";
            }
        }, 4000);
    </script>

</body>

</html>