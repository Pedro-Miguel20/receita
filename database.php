<?php 

$servidor = "localhost";
$usuario = "id21026494_conta";
$senha = "Prea@666";
$dbname = "id21026494_receita";

$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

if( ! $conn) {
    die("Falha na conexão:" .mysqli_connect_error());
}

?>
