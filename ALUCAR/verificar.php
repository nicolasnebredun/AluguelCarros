<?php
require 'conexao.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style/loader.css">
</head>

<?php
    $CPF1 = $_POST['CPF'];
    $consulta = "SELECT ID FROM cliente WHERE CPF ='$CPF1' ";
    $execultaConsulta1 = mysqli_query($conexao, $consulta);
    $resultado = mysqli_fetch_array($execultaConsulta1);

    if ($resultado) {
        $idConsulta = $resultado['ID'];
        if (mysqli_num_rows($execultaConsulta1) > 0) {
            header("Refresh: 0; url=carrosParaAlugar.php?ID=" . $idConsulta);
            exit(); // Termina o script após o redirecionamento
        } else {
            echo '<script>
                setTimeout(function() {
                    alert("Cadastro não Localizado, Algo de Errado Aconteceu.");
                    window.location.href = "login.php";
                }, 4000);
            </script>';
        }
    } else {
        echo '<script>
            setTimeout(function() {
                alert("Cadastro não Localizado, Algo de Errado Aconteceu.");
                window.location.href = "login.php";
            }, 4000);
        </script>';
    }
?>

<body>
    <div class="loader"> Verificando...</div>
    <div id="myProgress">
        <div id="myBar"></div>
    </div>
</body>