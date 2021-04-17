<?php 

session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'tNome', FILTER_SANITIZE_STRING);

$result_usuario = "INSERT INTO 	voluntario (nome, created) VALUES ('$nome',NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);

 if(mysqli_insert_id($conn)){
     $_SESSION['msg'] = "<p style='color:green;'>Voluntário cadastrado com sucesso</p>";
    header("Location: voluntarios.PHP");
} else {
    $_SESSION['msg'] = "<p style='color:red;'>O Voluntário não foi cadastrado com sucesso</p>";
    header("Location: voluntarios.PHP");
}

?>