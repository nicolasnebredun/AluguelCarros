<?php
require 'conexao.php';
?>

<!DOCTYPE html>
<html lang="en">

<?php
$Nome = $_POST['Nome'];
$Sobrenome = $_POST['Sobrenome'];
$CPF = $_POST['CPF'];
$Telefone = $_POST['Telefone'];
$consultaVerifica = "SELECT ID FROM cliente WHERE CPF ='$CPF' ";
$execultaTeste = mysqli_query($conexao, $consultaVerifica);

if (mysqli_num_rows($execultaTeste) <= 0) {
$regCliente = "INSERT INTO cliente (Nome, Sobrenome, CPF, Telefone) VALUES ('$Nome', '$Sobrenome', '$CPF', '$Telefone')";
$execultaRegCliente = mysqli_query($conexao, $regCliente);
    if ($execultaRegCliente) {
    
        echo "<script>alert('Registro realizado com sucesso!');</script>";
    header("Refresh: 0; url=login.php");
    
} else {

    header("Refresh: 0; url=FALHA.php");
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
            if (confirm("Você Está Registrado agora!")) {
                txt = "Você está Registrado!";
            } else {
                txt = "A Conta não foi registrada, Algo de Errado Aconteceu.";
            }
        }, 4000);
    </script>
    <?php
} else {
    echo "<script>alert('CPF Já Cadastrado!');</script>";
    header("Refresh: 0; url=login.php");
}
?>
</body>

</html>