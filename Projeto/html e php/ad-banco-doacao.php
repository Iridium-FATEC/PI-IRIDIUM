<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="sortcut icon" href="imagens/logo.jpeg" type="image/jpeg" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/admin.css" rel="stylesheet">
    <title>Doação</title>
    
</head>

<body>
    
<input type="checkbox" id="check">
     <label id="icone" for="check"><img src="imagens/logo-admin-menu.png" alt="logo" /></label>
        
    <div class="barra">

        <nav>
            <a href="ad-banco-projeto.php"><div class="link">Projetos</div></a>
            <a href="ad-banco-participantes.php"><div class="link">Participantes</div></a>
            <a href="ad-banco-doacao.php"><div class="link">Doação</div></a>
            <a href="ad-banco-doacao-anonima.php"><div class="link">Doação anonima</div></a>
            <a href="ad-banco-voluntario.php"><div class="link">Voluntarios</div></a>
            <a href="index.html"><div class="link">Voltar</div></a>

        </nav>

    </div>

<?php

include_once("3conexao.php");

$result_usuario = "SELECT * FROM doacao ORDER BY id DESC";
$resultado_usuario = mysqli_query($conn, $result_usuario);  
    if(($resultado_usuario) and ($resultado_usuario->num_rows != 0)){}
        while($row_usuario = mysqli_fetch_assoc($resultado_usuario)){
            echo $row_usuario['id'] . "<br>";
            echo $row_usuario['nome'] . "<br>";
            echo $row_usuario['sobrenome'] . "<br>";
            echo $row_usuario['cpf'] . "<br>";
            echo $row_usuario['email'] . "<br>";
            echo $row_usuario['celular'] . "<br>";
            echo $row_usuario['nascimento'] . "<br>";
            echo $row_usuario['doacao'] . "<br>";
            echo $row_usuario['created'] . "<br>";
            echo $row_usuario['modified'] . "<br>";
    } 
    


?>

</body>

</html>