<?php 
session_start();
include 'config/conexao.php';
include 'sistema/Home/style.php';
include 'funcoes/funcoes.php';
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
                <ul class ="nav-menu">
                    <a href= "sistema/login/index.php" class="btnLogin-popup">Login</a>
                </ul>
                <div class="hamburguer">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
        </nav>
    </header>
    
    <div class="panel">
       <h1>Bem-Vindo ao Cursos Online!</h1>
    </div>


    <footer>
        <div class="footer-content">
            <div class="social-media">
                <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
                <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
                <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
            </div>
            <div class="contact-info">
                <p>Email: contato@exemplo.com</p>
                <p>Telefone: (XX) XXXX-XXXX</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2023 Cursos Online. Todos os direitos reservados.</p>
        </div>
    </footer>
    
    <script src='script.js'></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
