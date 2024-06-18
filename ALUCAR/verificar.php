<?php
require 'conexao.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style/loader2.css">
</head>

<body>
    <?php

    $CPF1 = $_POST['CPF'];
    $consulta = "SELECT ID FROM cliente WHERE CPF ='$CPF1' ";
    $execultaConsulta1 = mysqli_query($conexao, $consulta);
    $idConsulta = mysqli_fetch_row($execultaConsulta1)[0];
    $execultaConsulta = mysqli_query($conexao, $consulta);

    if (mysqli_num_rows($execultaConsulta) > 0) {
        header("Refresh: 3; url=carrosParaAlugar.php?ID=" . $idConsulta);
    } else {
        header("Refresh: 1; url=login.php");
    }

    ?>
    <div class="loader">
        <label>Please wait...</label>
        <div class="loading"></div>
    </div>




</body>