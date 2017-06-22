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
            $recCpf = $_GET['editCpf'];
            
            $seleciona = mysqli_query($conexao, "select * from lutador where cpf = {$recCpf}");
            $campo= mysqli_fetch_array($seleciona);
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
                        <li><a href="#">Cadastro</a></li>
                        <li><a href="#">Listagem</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
            </nav>
              <h2>Edição de Lutadores</h2>
              <form action="inserirEditarLutador.php" method="post">
            <div class="form-group" style="">
                <label for="cpf">CPF:</label>
                <input type="hidden" class="form-control" id="cpf" name="cpf" value="<?=$campo['cpf']?>">
              </div>
            <div class="form-group" style="">
                <label for="nome">Nome:</label>
                <input type="txt" class="form-control" id="nome" name="nome" value="<?=$campo['nome']?>">
            </div>
            <div class="form-group">
            <label for="nacionalidade">Nacionalidade:</label>
            <select type="txt" name="nacionalidade" class="form-control" id="nacionalidade">
                <option>Argentina</option>
                <option>Alemanha</option>
                <option>Australia</option>
                <option>Brasil</option>
                <option>Chile</option>
                <option>Inglaterra</option>
                <option>Italia</option>
                <option>Japão</option>
                <option>Russia</option>
            </select>
            </div>
            <div class="form-group" style="">
                <label for="idade">Idade:</label>
                <input type="number" class="form-control" id="idade" name="idade" min="0" value="<?=$campo['idade']?>">
            </div>
            <div class="form-group" style="">
                <label for="altura">Altura:</label>
                <input type="" class="form-control" id="altura" name="altura" step="0.01" min="0" value="<?=$campo['altura']?>">
            </div>
            <div class="form-group" style="">
                <label for="peso">Peso:</label>
                <input type="number" class="form-control" id="peso" name="peso" step="any" min="0" value="<?=$campo['peso']?>">
            </div>
             
                  <a href="listaLutador.php" type="button" class="btn btn-default">Voltar</a>
             <button type="submit" class="btn btn-primary">Editar</button>
            </form>
        </div>
    </body>
</html>
