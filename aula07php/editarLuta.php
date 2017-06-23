<!DOCTYPE html>

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
    </head>
    <body>
        
        <?php
            include '../conecta.php';
            $recId = $_GET['editId'];
            
            $seleciona = mysqli_query($conexao, "select * from luta where id = {$recId}");
            $campoLuta = mysqli_fetch_array($seleciona);
        ?>
        
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
            
            <h2>Edição de Lutas</h2>
            
            <form action="inserirEditarLuta.php" method="post">
            <div class="form-group" style="">
                <input type="hidden" class="form-control" id="id" name="id" value="<?=$campoLuta['id']?>">
              </div>
            <div class="form-group">
            <label for="desafiado">Desafiado:</label>
            <select type="txt" name="desafiado" class="form-control" id="desafiado">
                <?php 
                include '../conecta.php';
                $seleciona = mysqli_query($conexao, "select * from lutador");
                    while ($campo = mysqli_fetch_array($seleciona)) {?>
                <option><?=$campo['cpf'] ?></option>                
                <?php } ?>
                
            </select>
            </div>
            
            <div class="form-group">
            <label for="desafiante">Desafiante:</label>
            <select type="txt" name="desafiante" class="form-control" id="desafiante">
                <?php 
                include '../conecta.php';
                $seleciona2 = mysqli_query($conexao, "SELECT * from lutador");
                    while ($campo2 = mysqli_fetch_array($seleciona2)) {?>
                <option><?=$campo2['cpf'] ?></option>
                <?php } ?>
                
            </select>
            </div>
            
            <div class="form-group" style="">
                <label for="rounds">Rounds:</label>
                <input type="number" class="form-control" id="rounds" name="rounds" min="0" value="<?=$campoLuta['rounds']?>">
            </div>
            
            <div class="form-group" style="">
                <label for="aprovada">Aprovada:</label>
                <input type="text" class="form-control" id="aprovada" name="aprovada" value="<?=$campoLuta['aprovada']?>" readonly="true">
            </div>
             
             <a href="listaLuta.php" type="button" class="btn btn-default">Voltar</a>
             <button type="submit" class="btn btn-primary">Editar</button>
            </form>
        </div>
    </body>
</html>
