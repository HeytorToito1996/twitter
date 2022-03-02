
<?php

	session_start();

	if(!isset($_SESSION['usuario'])){
		header('Location : ../index.php?erro=1');
	}

	require_once('conexao.php');


	$textoPostagem = $_POST['textoPostagem'];
	$idUsuario = $_SESSION['idUsuario'];
	//Upload de Imagens
	$arquivo = $_FILES['imgPostagem'];
	$extensao = pathinfo($arquivo['name'],PATHINFO_EXTENSION);//Obter extensao do Arquivo
	$novoArquivo = uniqid($arquivo['name']).".".$extensao; //Definir o NovoNome do Arquivo
	if (!file_exists("admin/Uploads")){
		$diretorio  = mkdir("admin/Uploads");//Definir diretorio
	}

	//Transferir Arquivo para o diretorio criado
	move_uploaded_file($arquivo['tmp_name'],$diretorio.$novoArquivo);


	if($textoPostagem == '' || $idUsuario == ''){
		die();
	}

	    $objDB = new db();
		$link = $objDB->conectaMySQL();

		$consulta = "INSERT INTO postagem (idUsuario, postagem,imgPostagem) VALUES ('$idUsuario','$textoPostagem','$novoArquivo')";

		mysqli_query($link,$consulta);


?>
