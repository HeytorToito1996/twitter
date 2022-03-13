<?php

	session_start(); //Inicia a sessão de usuário

	if(!isset($_SESSION['usuario'])){
		header('Location : ../index.php?erro=1'); //Verifica se há sessão ativa
	}

	require_once('conexao.php');

	$idUsuario = $_SESSION['idUsuario'];
    $deixarseguirIDusuario = $_POST['deixarseguirIDusuario'];

    if ($idUsuario == '' || $deixarseguirIDusuario == ''){
        die();
    }
	

	    $objDB = new db();
		$link = $objDB->conectaMySQL();

		$consulta = "DELETE FROM usuarioSeguidores WHERE idUsuario = '$idUsuario' AND idUsuarioFollow = '$deixarseguirIDusuario'";
		//echo $consulta;
		mysqli_query($link,$consulta);


?>
