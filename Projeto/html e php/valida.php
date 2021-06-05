<!-- valida os dados do login -->
<?php
    session_start();

    include_once("login-conexao.php")

    if((isset($_POST['email'])) && (isset($_POST['senha']))){
        $usuario = mysqli_real_escape_string($conn, $_POST['email']); // escapa de caracteres especiais como aspas.
        $senha = mysqli_real_escape_string($conn, $_POST['senha']);
        //$senha = md5($senha);

        if(($senha == "123") && ($usuario == "teste@gmail.com")){
            header("Location: admin.php");

        } else {
            $_SESSION['loginErro'] = "Usuário ou senha inválido"
            header("Location: ad-login.html");
        }

    } else {
        $_SESSION['loginErro'] = "Usuário ou senha inválido"
        header("Location: ad-login.html");
    }

?>