<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta charset="UTF-8">
        <title>UEC</title>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>
        <script type="text/javascript">$(document).ready(function(){$("#cpf").mask("999.999.999-99");});</script>
    </head>
    
    <body>
    <div class="container">
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                  <div class="navbar-header">
                      <a class="navbar-brand" href="index.php">UEC</a>
                  </div>
                  <ul class="nav navbar-nav">
                    
                    <li class="dropdown">
                      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Lutador
                      <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="cadastroLutador.php">Cadastro</a></li>
                        <li><a href="listaLutador.php">Listagem</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Luta
                      <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                          <li><a href="cadastroLuta.php">Cadastro</a></li>
                          <li><a href="listaLuta.php">Listagem</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
            </nav>  
              <h2>Cadastro de Lutas</h2>
              
        <form action="inserirLuta.php" method="post" name="form">
            
            <div class="form-group">
            <label for="desafiado">Desafiado:</label>
            <select type="txt" name="desafiado" class="form-control" id="desafiado">
                <?php 
                include '../conecta.php';
                $seleciona = mysqli_query($conexao, "select * from lutador");
                    while ($campo = mysqli_fetch_array($seleciona)) {?>
                <option><?=$campo['nome'] ?></option>
                
                <?php } ?>
                <input type="hidden" value="<?=$campo['cpf'] ?>" name="cpfSEL"/>
            </select>
            </div>
            
            <div class="form-group">
            <label for="desafiante">Desafiante:</label>
            <select type="txt" name="desafiante" class="form-control" id="desafiante">
                <?php 
                include '../conecta.php';
                $seleciona2 = mysqli_query($conexao, "SELECT * from lutador");
                    while ($campo2 = mysqli_fetch_array($seleciona2)) {?>
                <option><?=$campo2['nome'] ?></option>
                <?php } ?>
                <input type="hidden" value="<?=$campo['cpf'] ?>" name="cpfSEL2"/>
            </select>
            </div>
            
            <div class="form-group" style="">
                <label for="rounds">Rounds:</label>
                <input type="number" class="form-control" id="rounds" name="rounds" min="0">
            </div>
            
            <div class="form-group" style="">
                <label for="aprovada">Aprovada:</label>
                <input type="text" class="form-control" id="aprovada" name="aprovada" value="true" readonly="true">
            </div>
             <button type="submit" class="btn btn-success">Salvar</button>
        </form>
        </div>
    <script>
        $(document).ready(function () { 
            var $seuCampoCpf = $("#cpf");
            $seuCampoCpf.mask('000.000.000-00', {reverse: false});
        });
    </script>
                  
    </body>
</html>
