<?php 

	$serv = "fdb2.55fast.com";
	$user = "1467839_projweb";
	$pass = "151188lb";
	$dbname = "1467839_projweb";

	$conexao = mysqli_connect($serv,$user,$pass,$dbname);

	if(!$conexao){
		echo "Falha ao conectar ao banco de dados!";
	}
	else{
		//echo "Conectado com sucesso!"."<br>";
	}








?>