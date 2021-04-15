<<<<<<< HEAD
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
    <link rel="sortcut icon" href="img/logo.jpeg" type="image/jpeg"/>
    <title>voluntarios</title>
    <a href="index.HTML"> Voltar </a>

</head>

<div style="text-align:center" class="titulo"><h2>CADASTRO DE VOLUNTARIOS</h2> </div>

<body>
    
    <?php
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


</body>
</html>