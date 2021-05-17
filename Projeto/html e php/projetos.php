<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="sortcut icon" href="imagens/logo.jpeg" type="image/jpeg"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Asap:ital,wght@1,600&family=Nunito:ital,wght@1,800&family=Yellowtail&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/projetos.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VóMariaFélix</title>
    
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
                        <li><a href="voluntarios.php" class="botao">Voluntários</a></li>
                        <li><a href="participantes.php" class="botao">Participantes</a></li>
                        <li><a href="projetos.php" class="botao">Projetos</a></li>
                        <li><a href="admin.php" class="botao">Admin</a></li>
                    </header>
                </ul>        
            </nav>
        </div>
    </div>

    <nav>
    <?php
        if(isset($_SESSION['msg']))
            echo $_SESSION['msg'];
            unset($_SESSION['msg'])
    ?>
        <form id="CadastroP" method="POST" action="5processa.php">
            <div>
                <h1 >Cadastro de Projetos</h1> 
            </div>
            <fieldset id="Projeto">
                <p><label for="cVoluntario">Nome do Voluntário: </label><input type="text" name="tVoluntario" id="cVoluntario" placeholder="Exemplo De Tal"/></p>
                <p><label for="ccpf">CPF do Voluntário: </label><input type="text" name="tcpf" id="ccpf" placeholder="Ex: 22233344456"/></p>
                <p><label for="cEmail">E-mail do voluntário </label><input type="email" name="tEmail" id="cEmail" placeholder="exemple@tal.com"/></p>
                <p><label for="cProjeto">Nome do projeto: </label><input type="text" name="tProjeto" id="cProjeto" size="55" maxlength="100" placeholder="Exemplo de tal"/></p>
                <p><label for="cEnsino">Tipo de ensino/atividade: </label><input type="text" name="tEnsino" id="cEnsino" size="55" maxlength="100" placeholder="Ex: Educação Física"/></p>
                <p><label for="cEnsino">Tipo de local necessario para a realização do projeto: </label><input type="text" name="tlocal" id="clocal" size="55" maxlength="100" placeholder="Ex: Quadra, Parque, etc"/></p>
                <p><label for="cEnsino">Vai precisar de transporte ? se sim qual ? e será responsabilidade do voluntario a conseguir ou ficara pela responsabilidade da ong ?: </label><input type="text" name="ttransporte" id="ctransporte" size="55" maxlength="100" placeholder="Ex: sim, onibus, Responsabilidade do voluntario"/></p>   
                <input type="submit" value="Enviar">         
            </fieldset>
        </form>
    </nav>
    
</body>
</html>