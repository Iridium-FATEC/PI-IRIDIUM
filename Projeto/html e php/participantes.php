<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="sortcut icon" href="imagens/logo.jpeg" type="image/jpeg" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/3style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Participantes</title>

</head>
<!-- Tags para formação do menu fixo, com botões que podem ter o nome alterado dentro das tags<li><a...-->
<body>
    <div class="teo">
        <div class="main">
            <nav style="display: flex; float: center">
                <a href="#"></a>
                <ul>
                    <img src="imagens/logo.jpeg" class="logo1">
                    <header>
                        <li><a href="index.php" class="botao">Home</a></li>
                        <li><a href="voluntarios.php" class="botao">Voluntários</a></li>
                        <li><a href="participantes.php" class="botao">Participantes</a></li>
                        <li><a href="projetos.php" class="botao">Projetos</a></li>
                        <li><a href="admin.php" class="botao">Admin</a></li>
                    </header>
                </ul>        
            </nav>
        </div>
    </div>
        <h2 style="text-align: center;">Participantes</h2>
        
        <?php
        if(isset($_SESSION['msg']))
            echo $_SESSION['msg'];
            unset($_SESSION['msg'])
        ?>
        <!--Tags de caixas de texto para aquisição de informações-->
        <form method="POST" action="2processa.php">
            <fieldset>
                <p><label for="iparticipante">Nome do participante: </label><input type="text" name="paname" id="iparticipante" placeholder="Nome Completo" /></p>
                <p><label for="icpf">CPF: </label><input type="text" name="pacpf" id="icpf" placeholder="EX: 24375824319" /></p>
                <p><label for="idata">Data de nascimento: </label><input type="text" name="ndata" id="idata"  placeholder="EX: 04/02/2010"/></p>
                <p><label for="Responsavel">Nome do responsavel: </label><input type="text" name="responsavel" id="iresponsavel" placeholder="Pessoa responsavel" /></p>
                <p><label for="iestado">Estado: </label><input type="text" name="esname" id="iestado" placeholder="São Paulo" /></p>
                <p><label for="icidade">Cidade: </label><input type="text" name="cname" id="icidade" placeholder="São José dos Campos" /></p>
                <p><label for="irua">Rua: </label><input type="text" name="rname" id="irua" placeholder="Airto Pelógia, 184" /></p>
                <p><label for="iemail">E-mail: </label><input type="email" name="emname" id="iemail" size="30" placeholder="example@gmail.com" /></p>
                <input type="submit" value="Enviar">
            </fieldset>
        </form>
        <!-- informações da ONG na parte inferior  -->
        <fieldset id="pcontatos">
            <p>E-mail: <a href=mailto:administracao@aamu.org.br>vomariafelix@cecoi.org.br</a></p>
            <p>Contato: <a href=mailto:(12)91234-5678>(12) 91234-5678</a></p>
        </fieldset>

    </form>
    
    
</body>

</html>
