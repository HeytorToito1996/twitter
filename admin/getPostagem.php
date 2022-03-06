<?php 

session_start(); 
require_once('conexao.php'); 

if (!isset($_SESSION['usuario'])){
    header('Location: index.php?erro=1');
}

$idUsuario = $_SESSION['idUsuario'];

$objDB = new DB();
$link = $objDB -> conectaMySQL();

//Consulta SQL com um Join entre Tabelas
$consulta = "SELECT DATE_FORMAT(post.dataPostagem,'%d %b %Y %T') AS dataPostagemFormatada,post.postagem,usu.usuario FROM postagem AS post JOIN usuarios AS usu ON (post.idUsuario = usu.idUsuario) WHERE post.idUsuario = '$idUsuario' ORDER BY dataPostagem DESC";
//echo $consulta;
$resultado = mysqli_query($link,$consulta);

//Loop Para exibição dos posts na Timeline
if($resultado){
    while($registro = mysqli_fetch_array($resultado,MYSQLI_ASSOC)){
        echo '<a href="#" class="list-group-item">';
            echo '<h4 class="list-group-item-heading"> '.$registro['usuario'].' <small> Postado em : '.$registro['dataPostagemFormatada'].' </small> </h4>';
            echo '<p class="list-group-item-text">'.$registro['postagem'].'</p>';
        echo '</a>';
    }

}

else {
    echo 'Falha ao Obter os Dados da Consulta';
}

?>