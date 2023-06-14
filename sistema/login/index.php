<?php 
session_start();
include 'styleLogin.php';
?>

<!DOCTYPE html>
<html lang="pt-br"> 

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, 
    initial-scale=1.0">
    <title>Cursos Online
    </title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <img  alt="">
    <header>
        <h2 class="logo">Cursos</h2>
        <nav class="navbar">
                <div class="hamburguer">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
        </nav>
    </header>
    
    <?php
        if(isset($_SESSION['nao_autenticado'])): 
    ?>
        <div class="erro">
            <p class="error-message">Usuário ou Senha inválidos! Tente Novamente.</p>
        </div>
    <?php
        endif;
        unset($_SESSION['nao_autenticado']);
    ?>

    <div class="wrapper">       
        <div class="form-box login">
            <h2>Login</h2>
            <form action="login.php" method="POST">
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
                    <input type="email" id="email" name="email">
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                    <input type="password" id="senha" name ='senha'>
                    <label>Senha</label>

                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">Lembrar-se</label>
                    <a href="#">Esqueceu a Senha?</a>
                </div>
                <button type="submit" class="btn">Logar-se</button>
            </form>

            <div class="login-register">
                <p>Nao possui conta?
                    <a href="registrologin/pageregister.php" class="register-link">Registre-se</a>
                </p>
            </div>
    </div>
    <script src='sistema/login/script.js'></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>