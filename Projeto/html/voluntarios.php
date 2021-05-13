<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/3style.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="sortcut icon" href="imagens/logo.jpeg" type="image/jpeg"/>
    <title>Voluntarios</title>
</head>

<body>
    <div class="teo">
        <div class="main">
            <nav style="display: flex; float: center">
                <a href="#"></a>
                <ul>
                    <img src="imagens/logo.jpeg" class="logo1">
                    <header>
                        <li><a href="index.HTML" class="botao">Home</a></li>
                        <li><a href="participantes.HTML" class="botao">Participantes</a></li>
                        <li><a href="projetos.HTML" class="botao">Projetos</a></li>
                        <li><a href="admin.php" class="botao">Admin</a></li>
                    </header>
                </ul>        
            </nav>
        </div>
    </div>
    
    <h2>CADASTRO DE VOLUNTARIOS</h2>
    
    
    <?
    
    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>
    <form method="POST" action="processa.php">
        <fieldset id="mensagem">
            <p>Tipo de Voluntário:<input type="text" name="tNome" id="cNome" size="50" maxlength="70" placeholder="Ex: dar aulas, monitoria, atividades recreativas, dentre outros"/></p>
            <p>Nome:<input type="text" name="tNome" id="cNome" size="50" maxlength="70" placeholder="Nome Completo"/></p>
            <p>Email:<input type="email" name="tMail" id="cMail" size="50" maxlength="70" placeholder="Example@gmail.com"/></p>
            <p>Como pretende contribuir para a ONG? (Especificar se será em sua área de formação acadêmica, prestação de serviços gerais, auxiliar em atividades organizacionais, .etc)<input type="text" name="coNome" id="cNome" size="150" placeholder="Resumo das intenções do voluntario"/></p>        
            <input type="submit" value="Enviar" id="tEnviar" onclick="Enviar">

        </fieldset>
    
    </form>

    <span id="conteudo"></span>
    <script>
        $(document).ready(function () {
            $.post('voluntarios.php', function(retorna){
                $("conteudo").html(retorna);
            });
        });
    </script>

</body>
</html>