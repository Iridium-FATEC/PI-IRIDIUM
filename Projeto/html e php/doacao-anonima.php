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
    <title>Doação anonima</title>

</head>
<body>
<!-- Tags para formação do menu fixo, com botões que podem ter o nome alterado dentro das tags<li><a...-->
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

    <div>             
            <table>
                    <tr>
                    <!--abaixo o titulo-->
                        <td><h2>DOAÇÕES ANONIMAS</h2></td> 
                     <!--abaixo a imagem que fica ao lado do titulo-->
                        <td><img style="text-align: center;" width="75" height="75" src='imagens/anonymous.png'/></td>
            
                    </tr>
            </table>
        </div> 

        <?php
        if(isset($_SESSION['msg']))
            echo $_SESSION['msg'];
            unset($_SESSION['msg'])
        ?>

    <form method="POST" action="4processa.php" action="/action_page.php">
        <!--abaixo fieldset que agrupa uma caixa para preenchimento de valor de doação e um botão de enviar-->
        <fieldset id="botoespagamento">

                R$<input type="text" name="tquantity" step="5.0" min="5.0" placeholder="insira o valor a ser doado">
                <input type="submit" value="Enviar"  onclick="Enviar">

                <!--abaixo frase de efeito centralizada, para alterar mude o texto entre as tags <h2>-->
            <h2>Doe e junte-se a nós!</h2>

        </fieldset>

    </form>    

</body>

</html>