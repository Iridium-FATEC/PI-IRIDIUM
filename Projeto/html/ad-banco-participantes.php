<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Participantes</title>
    
</head>

<body>
    
<?php

include_once("2conexao.php");

$result_usuario = "SELECT * FROM participante ORDER BY id DESC";
$resultado_usuario = mysqli_query($conn, $result_usuario);  
    if(($resultado_usuario) and ($resultado_usuario->num_rows != 0)){}
        while($row_usuario = mysqli_fetch_assoc($resultado_usuario)){
            echo $row_usuario['id'] . "<br>";
            echo $row_usuario['nomedoparticipante'] . "<br>";
            echo $row_usuario['datadenascimento'] . "<br>";
            echo $row_usuario['responsavel'] . "<br>";
            echo $row_usuario['estado'] . "<br>";
            echo $row_usuario['cidade'] . "<br>";
            echo $row_usuario['rua'] . "<br>";
            echo $row_usuario['email'] . "<br>";
            echo $row_usuario['created'] . "<br>";
            echo $row_usuario['modified'] . "<br>";
    } 
    


?>

</body>

</html>