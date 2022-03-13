<?php 

session_start(); 
require_once('conexao.php'); 

if (!isset($_SESSION['usuario'])){
    header('Location: index.php?erro=1');
}


$nomePessoa = $_POST['nomePessoa'];
$idUsuario = $_SESSION['idUsuario'];

$objDB = new DB();
$link = $objDB -> conectaMySQL();

//Consulta SQL para realizar a busca no banco de dados
$consulta = "SELECT * FROM usuarios WHERE usuario LIKE '%$nomePessoa%' AND idUsuario <> $idUsuario";
//echo $consulta;
$resultado = mysqli_query($link,$consulta);

//Loop Para exibição dos posts na Timeline
if($resultado){
    while($registro = mysqli_fetch_array($resultado,MYSQLI_ASSOC)){
        echo '<a href="#" class="list-group-item">';
            echo '<strong> '.$registro['usuario'].'</strong> <small> - '.$registro['email'].' </small> </h4>';
            echo '<p class = "list-group-item pull-right">';
                echo '<button type="button" class="btn btn-default btn_seguir" data-id_usuario = "'.$registro['idUsuario'].'"> Seguir </button>';
                echo '<button type="button" class="btn btn-primary btn_unfollow" data-id_usuario = "'.$registro['idUsuario'].'"> Deixar de Seguir </button>';
            echo '</p>';
            echo '<div class="clearfix"></div>';
        echo '</a>';
    }

}

else {
    echo 'Falha ao Obter os Dados da Consulta';
}

?>