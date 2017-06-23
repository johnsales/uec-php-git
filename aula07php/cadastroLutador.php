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
              <h2>Cadastro de Lutadores</h2>
              
              <form action="inserirLutador.php" method="post" name="form">
            <div class="form-group" style="">
                <label for="cpf">CPF:</label>
                <input type="text" class="form-control" id="cpf" name="cpf">
              </div>
            <div class="form-group" style="">
                <label for="nome">Nome:</label>
                <input type="txt" class="form-control" id="nome" name="nome">
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
                <input type="number" class="form-control" id="idade" name="idade" min="0">
            </div>
            <div class="form-group" style="">
                <label for="altura">Altura:</label>
                <input type="" class="form-control" id="altura" name="altura" step="0.01" min="0">
            </div>
            <div class="form-group" style="">
                <label for="peso">Peso:</label>
                <input type="number" class="form-control" id="peso" name="peso" step="any" min="0">
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
