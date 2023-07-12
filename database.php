<?php 

$servidor = "localhost";
$usuario = "id20972808_rooter";
$senha = "Ninja01!";
$dbname = "id20972808_user_db";

$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

if( ! $conn) {
    die("Falha na conexão:" .mysqli_connect_error());
}

?>
