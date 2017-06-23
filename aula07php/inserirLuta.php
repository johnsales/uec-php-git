<?php

include '../conecta.php';
include_once './Lutador.php';
include_once './Luta.php';

//$desafiado = $_POST['cpfSEL'];
//$desafiante = $_POST['cpfSEL2'];
$desafiado = $_POST['desafiado'];
$desafiante = $_POST['desafiante'];

$rounds = $_POST['rounds'];
$aprovada = $_POST['aprovada'];
/*
$l = new Luta();
$l->setDesafiado($desafiado);
$l->setDesafiante($desafiante);
$l->setRounds($rounds);
$l->setAprovada($aprovada);
*/

mysqli_query($conexao, "insert into luta (id,cpf_desafiado,cpf_desafiante,rounds,aprovada) values ('','$desafiado','$desafiante','$rounds','$aprovada')");

header("location:listaLuta.php");
?>

