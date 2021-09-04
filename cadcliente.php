<?php 
	
	include_once 'conexao.php';

	$nome = $_POST['txtNome'];
	$cpf = $_POST['txtCPF'];
	/*$endereco = $_POST['txtEnd'];
	$estado	= $_POST['listEstado'];
	$dtNasc = $_POST['txtData'];
	$sexo = $_POST['sexo'];
	$login = $_POST['txtLogin'];
	$senha1= $_POST['txtSenha1'];
	$senha2= $_POST['txtSenha2'];*/

	$camposfalsos = true;

	if( empty($nome) ){

		echo "Campo vazio "."<br>";

		$camposfalsos = false;
	}

	/*if($senha1 != $senha2){
		$camposfalsos = false;
		echo "Senhas não conferem!";
	}*/

	if($camposfalsos = true){
		$sql = "INSERT INTO clientes (nome, cpf) VALUES ('$nome', '$cpf')";
		$envia_sql = mysqli_query($conexao, $sql);
	}

	if($envia_sql != 0){
		//echo "Inserido com sucesso!";
		echo "<script>window.location='clientes.php';</script>";

	}else{
		echo "Falha ao inserir!";
	}


?>