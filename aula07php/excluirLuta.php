<?php

    require '../conecta.php';
    
    $id = $_GET['idExc'];
    
    mysqli_query($conexao, "delete from luta where id = {$id}");
    
    header("location:listaLuta.php");
?>
