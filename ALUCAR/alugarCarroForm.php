<?php
require 'conexao.php';
?>

<!DOCTYPE html>
<html lang="en">

<?php
$Id = $_POST['ID'];
$DRetirada = $_POST['DRetirada'];
$DDevolucao = $_POST['DDevolucao'];
// Convertendo as strings para objetos DateTime
$date1 = new DateTime($DRetirada);
$date2 = new DateTime($DDevolucao);

// Calculando a diferença entre as datas
$interval = $date1->diff($date2);

// Obtendo o número de dias como um inteiro
$Resultado = (int)$interval->days;
$QDias = $Resultado;
$LRetirada = $_POST['LRetirada'];
$LDevolucao = $_POST['LDevolucao'];
$HRetirada = $_POST['HRetirada'];
$HDevolucao = $_POST['HDevolucao'];
$Carro = $_POST['Carro'];

$regAluguel = "INSERT INTO alugueis (cliente_id, DRetirada, DDevolucao, QDias, LRetirada, LDevolucao, HRetirada, HDevolucao, Carro) VALUES ('$Id', '$DRetirada', '$DDevolucao', '$QDias', '$LRetirada', '$LDevolucao', '$HRetirada', '$HDevolucao', '$Carro')";
$execultaRegAluguel = mysqli_query($conexao, $regAluguel);
if ($execultaRegAluguel) {

    header("Refresh: 5; url=listaaluguel.php");
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