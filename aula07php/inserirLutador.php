<?php

include '../conecta.php';
include_once './Lutador.php';

$cpf = $_POST['cpf'];
$cpf = preg_replace("/\D+/", "", $cpf);//tira qualquer tipo de caracter que não seja númerico
$nome = $_POST['nome'];
$nacionalidade = $_POST['nacionalidade'];
$idade = $_POST['idade'];
$altura = $_POST['altura'];
$peso = $_POST['peso'];

$l = new Lutador($cpf, $nome, $nacionalidade, $idade, $altura, $peso, 0, 0, 0);

mysqli_query($conexao, "insert into lutador (cpf,nome,nacionalidade,idade,altura,peso,categoria) values ('{$l->getCpf()}','{$l->getNome()}','{$l->getNacionalidade()}','{$l->getIdade()}','{$l->getAltura()}','{$l->getPeso()}','{$l->getCategoria()}')");

header("location:listaLutador.php");
?>

