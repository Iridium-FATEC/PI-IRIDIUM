<?php
// local onde vai validar o usuario e senha do login
include('loginConexao.php');

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select usuario_id, usuario from `login` where usuario = {'$usuario'} and senha = md5({'$senha}')";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

echo $row;exit;

