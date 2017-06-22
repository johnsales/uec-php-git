<?php

    require '../conecta.php';
    
    $cpf = $_GET['cpfExc'];
    
    mysqli_query($conexao, "delete from lutador where cpf = {$cpf}");
    
    header("location:listaLutador.php");
?>
