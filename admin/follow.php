<?php

	session_start(); //Inicia a sessão de usuário

	if(!isset($_SESSION['usuario'])){
		header('Location : ../index.php?erro=1'); //Verifica se há sessão ativa
	}

	require_once('conexao.php');


	$textoPostagem = $_POST['textoPostagem'];
	$idUsuario = $_SESSION['idUsuario'];
    $seguirIDusuario = $_POST['seguirIDusuario'];

    if ($idUsuario == '' || $seguirIDusuario == ''){
        die();
    }
	

	    $objDB = new db();
		$link = $objDB->conectaMySQL();

		$consulta = "INSERT INTO usuarioSeguidores (idUsuario, idUsuarioFollow) VALUES ('$idUsuario','$seguirIDusuario')";
		//echo $consulta;
		mysqli_query($link,$consulta);


?>
