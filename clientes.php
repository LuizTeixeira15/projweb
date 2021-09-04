<?php
include_once 'conexao.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lista de consultas</title>
          <!-- Latest compiled and minified CSS -->
          <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body class="container">
        <br>
        <h2 class="text-center">Lista de consultas cadastradas</h2>
        <br>
        <div>
            <table class="table table-striped table-hover">
                <thead>
                  <tr>
                    
                    <th scope="col">Nome</th>
                    <th scope="col">CPF</th>
                    
                  </tr>
                </thead>
            <tbody>          
              <?php 
                $sql = "SELECT * FROM clientes";
                $res = mysqli_query($conexao,$sql);

                $row = mysqli_num_rows($res);

                while ($reg = mysqli_fetch_assoc($res)) {

                  //$id = $reg["id"];
                  $nome = $reg["nome"];
                  $cpf =$reg["cpf"];
                 
                  echo "<tr>

                            <td>$nome</td>
                            <td>$cpf</td>
                            
                            <td>
                              <a href='index.php?cod=$nome' class='btn btn-primary'>Editar</a>
                              <button type='button' class='btn btn-danger'>Apagar</button>
                            </td>
                        </tr>"; 
                }
              ?>


                </tbody>
            </table>

    </div>
      <a class="btn btn-primary" href="index.php" role="button"  >Voltar</a>

    </body>
</html>
