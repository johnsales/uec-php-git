<?php

include '../conecta.php';

$cpf = $_POST['cpf'];
$nome = $_POST['nome'];
$nacionalidade = $_POST['nacionalidade'];
$idade = $_POST['idade'];
$altura = $_POST['altura'];
$peso = $_POST['peso'];

mysqli_query($conexao, "update lutador set cpf = '$cpf',nome = '$nome', nacionalidade = '$nacionalidade',idade = '$idade', altura = '$altura', peso = '$peso' where cpf = $cpf ");

header("location:listaLutador.php");
?>

