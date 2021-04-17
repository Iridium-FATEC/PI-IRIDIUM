<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/admin.css" rel="stylesheet">
    <title>Admin</title>

</head>

    <body>

        <input type="checkbox" id="check">
        <label id="icone" for="check"><img src="imagens/logo-admin-menu.png" alt="logo" /></label>
        
        <div class="barra">

            <nav>
                <a href="ad-banco-projeto.html"><div class="link">Projetos</div></a>
                <a href="ad-banco-participantes.html"><div class="link">Participantes</div></a>
                <a href="ad-banco-doacao.html"><div class="link">Doação</div></a>
                <a href="ad-banco-doacao-anonima.html"><div class="link">Doação anonima</div></a>
                <a href="ad-banco-voluntario.html"><div class="link">Voluntarios</div></a>

            </nav>

        </div> 

        <div style='text-align:center'>

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
        </div>

    </body>

</html>