<?php 
session_start();
include "../../config/conexao.php";

if(empty($_POST['email']) || empty($_POST['senha'])) {
    header('Location: index.php');
    $_SESSION['nao_autenticado'] = true; 
    exit();
}

$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);


$email = $_POST['email'];
$senha = $_POST['senha'];


$query = "SELECT * FROM `usuarios` WHERE email= '{$email}' AND senha = md5('{$senha}')";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
    $_SESSION['email'] = $email;
    header('Location: ../Home/home.php');
    exit();
} else {
    $_SESSION['nao_autenticado'] = true; 
    header('Location: index.php');
    exit();
}

?>