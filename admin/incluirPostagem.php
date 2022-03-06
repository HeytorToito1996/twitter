<?php

	session_start(); //Inicia a sessão de usuário

	if(!isset($_SESSION['usuario'])){
		header('Location : ../index.php?erro=1'); //Verifica se há sessão ativa
	}

	require_once('conexao.php');


	$textoPostagem = $_POST['textoPostagem'];
	$idUsuario = $_SESSION['idUsuario'];
	


	if($textoPostagem == '' || $idUsuario == ''){
		die();
	}

	    $objDB = new db();
		$link = $objDB->conectaMySQL();

		$consulta = "INSERT INTO postagem (idUsuario, postagem) VALUES ('$idUsuario','$textoPostagem')";
		//echo $consulta;
		mysqli_query($link,$consulta);


?>