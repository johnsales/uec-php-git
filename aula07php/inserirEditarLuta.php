<?php

include '../conecta.php';

$id = $_POST['id'];
$desafiado = $_POST['desafiado'];
$desafiante = $_POST['desafiante'];
$rounds = $_POST['rounds'];
$aprovada = $_POST['aprovada'];

mysqli_query($conexao, "update luta set cpf_desafiado = '$desafiado', cpf_desafiante = '$desafiante',rounds = '$rounds', aprovada = '$aprovada' where id = $id ");

header("location:listaLuta.php");
?>

