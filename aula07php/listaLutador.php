<!DOCTYPE html>


    <head>
        <title>Lutador Listagem</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="script.js"></script>
            
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
                        <li><a href="#">Cadastro</a></li>
                        <li><a href="#">Listagem</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
            </nav>
                <h2>Lista de Lutadores</h2>
              <table class="table">
                <thead>
                  <tr>
                    <th>CPF</th>
                    <th>Nome</th>
                    <th>Nacionalidade</th>
                    <th>Idade</th>
                    <th>Altura</th>
                    <th>Peso</th>
                    <th>Categoria</th>
                    <th>Alterar</th>
                    <th>Excluir</th>
                  </tr>
                </thead>

            <?php 
                include '../conecta.php';
                $seleciona = mysqli_query($conexao, "select * from lutador");
                    while ($campo = mysqli_fetch_array($seleciona)) {?>
                    <tbody>
                        <tr>
                          <td><?=$campo['cpf'] ?></td>
                          <td><?=$campo['nome'] ?></td>
                          <td><?=$campo['nacionalidade'] ?></td>
                          <td><?=$campo['idade'] ?></td>
                          <td><?=$campo['altura'] ?></td>
                          <td><?=$campo['peso'] ?></td>
                          <td><?=$campo['categoria'] ?></td>
                          <td  align="center" ><a href="editarLutador.php?editCpf=<?=$campo['cpf'] ?>"> <i class="fa fa-edit"> </i></a></td>
                          <td  align="center" ><a href="#" onclick="verifica(<?=$campo['cpf']?>)"> <i class="fa fa-trash-o"></i> </a></td>
                          
                        </tr>
                    </tbody>
                    <?php } ?>
            </table>
        </div>
    </body>
</html>