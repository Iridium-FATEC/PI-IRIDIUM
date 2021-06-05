<?php
//conexão pro login

$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "";

$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

if(!$conn){
    die("Falha na conexão: " . mysqli_connect_error());
} else {
    //echo "Conexão realizade com sucesso";
}

?>