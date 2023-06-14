<?php 
session_start();    
include 'styleRegister.php';
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
        if(isset($_SESSION['status_cadastro'])): 
        ?>
        <div class="success">
            <p>Cadasto Efetuado!</p>
            <p>Faça login informando o seu usuário e senha <a href="../../login/index.php">aqui</a></p>
        </div>
        <?php
        endif;
        unset($_SESSION['status_cadastro']);
        ?>
        <?php
        if(isset($_SESSION['usuario_existe'])): 
        ?>
        <div class="info">
            <p>O Email escolhido já possui conta. Por favor informe outro e tente novamente</p>
        </div>
        <?php
        endif;
        unset($_SESSION['usuario_existe']);
        ?>
    <div class="wrapper">
        <div class="form-box register">
            <h2>Registrar</h2>
            <form action= "cadastrar.php"  method="POST">
                <div class="input-box">
                    <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                    <input class="form-control" type="text" id="nome" name="nome">
                    <label>Nome de Usuário</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
                    <input class="form-control" type="email" id="email" name ="email">
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                    <input class="form-control" type="password" id="senha" name="senha">
                    <label>Senha</label>
                </div>
                <!-- <div class="remember-forgot">
                    <label><input type="checkbox">Concordo com os termos e condições de uso</label>
                </div> -->

                <button type="submit" class="btn">Registre-se</button>
            </form>
            
            <div class="login-register">
                <p>Já possui conta?
                    <a href="../index.php" class="login-link">Logar-se</a></p>
            </div>
        </div>
    </div>

    <script src='script.js'></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>