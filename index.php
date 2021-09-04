<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 ?>
  <!DOCTYPE html>
  <html lang="pt-br">

  <head>
    <meta charset="utf-8">
    <title>Cadastro de clientes</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <style media="screen">
      body {
        margin: 0px;
       
      }

      h2{
          font-family: Arial, Helvetica, sans-serif;
      }
      .container {
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
      }

      .box {
        width: 500px;
        height: 400px;
      }
    </style>
  </head>

  <body>

    <h2 class="text-center"><b>Cadastro de clientes</b></h2>
    <br>

    <form class="" name="formCadastro" action="cadcliente.php" method="post">
      <div class="container col-md-12">
        <div class="box">
          <div class="form-group row">
            <label for="inputNome" class="col-sm-2 col-form-label">Nome</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="txtNome" placeholder="Digite seu nome" value="">
              <small class="form-text text-muted">* Campo obrigatório</small>
            </div>
          </div>
            
          <div class="form-group row">
            <label for="inputCPF" class="col-sm-2 col-form-label">CPF</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="txtCPF" placeholder="Digite seu cpf" value="">
              <small class="form-text text-muted">* Campo obrigatório</small>
            </div>
          </div>
            
        <!--  <div class="form-group row">
            <label for="inputEnd" class="col-sm-2 col-form-label">Endereço</label>
            <div class="col-sm-10">
                <textarea cols="30" rows="5" class="form-control" name="txtEnd" placeholder="Digite seu endereco"></textarea>
              <small class="form-text text-muted">* Campo obrigatório</small>
            </div>
          </div>

          <div class="form-group row">
            <label for="inputEstado" class="col-sm-2 col-form-label">Escolha seu estado:</label>
            <div class="col-sm-10">
              <select class="form-control" id="selectEstado" name="listEstado">
                <optgroup label="Nordeste">
                   <option value="BA">Bahia</option>
                </optgroup>
                <optgroup label="Sudeste">
                    <option value="ES">Espírito Santo</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="SP">São Paulo</option>
                </optgroup>
            </select>
              <small class="form-text text-muted">* Campo obrigatório</small>
            </div>
          </div>

          <div class="form-group row">
            <label for="inputData" class="col-sm-2 col-form-label">Data Nasc:</label>
            <div class="col-sm-10">
              <input type="date" class="form-control" name="txtData" placeholder="Data" value="">
              <small class="form-text text-muted">* Campo obrigatório</small>
            </div>
          </div>
             
          <div class="form-group row">
            <label for="inputSex" class="col-sm-2 col-form-label">Sexo</label>
            <div class="col-sm-10">
                <input type="radio" name="sexo" value="M" checked> Masculino <br>
                <input type="radio" name="sexo" value="F"> Feminino
                <br><small class="form-text text-muted">* Campo obrigatório</small>
            </div>
          </div>
            
          <div class="form-group row">
            <label for="inputInteresse" class="col-sm-2 col-form-label">Área de interesses:</label>
            <div class="col-sm-10">
                <input name="checkCinema" type="checkbox" value="true"> Cinema <br>
                <input name="checkMusica" type="checkbox" value="true"> Música <br>
                <input name="chechInfo" type="checkbox" value="true"> Informática <br>
            </div>
         </div>  
            
          <div class="form-group row">
            <label for="inputLogin" class="col-sm-2 col-form-label">Login</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="txtLogin" value="" placeholder="Digite seu login">               
                <small class="form-text text-muted">* Campo obrigatório</small>
            </div>
          </div>
            
          <div class="form-group row">
            <label for="inputSenha1" class="col-sm-2 col-form-label">Senha</label>
            <div class="col-sm-4">
                <input type="password" class="form-control" name="txtSenha1" value="">               
                <small class="form-text text-muted">* Campo obrigatório</small>
            </div>
            <label for="inputSenha2" class="col-sm-2 col-form-label">Confimar senha</label>
            <div class="col-sm-4">
                <input type="password" class="form-control" name="txtSenha2" value="">               
                <small class="form-text text-muted">* Campo obrigatório</small>
            </div>
          </div>
           -->
          <div class="form-row">
            <div class="form-group col-md-6">
              <button type="submit" class="btn btn-block btn-lg btn-primary" name="btnEnviar" value="Enviar">Enviar</button>
            </div>
            <div class="form-group col-md-6">
              <button type="reset" class="btn btn-block btn-lg btn-danger" name="btnResetar" value="Limpar">Limpar</button>
            </div>
          </div>
        </div>
      </div>
    </form>

  </body>

  </html>