<?php

include_once("conexao.php");

$result_usuario = "SELECT * FROM voluntario ORDER BY id DESC";  
$resultado_usuario = mysqli_query($conn, $result_usuario);  
if(($resultado_usuario) and ($resultado_usuario->num_rows != 0)){
        while($row_usuario = mysqli_fetch_assoc($resultado_usuario)){
        echo $row_usuario['nome'] . "<br>";
    }
}else{

     } 
?>