<?php
session_start();
include "../../../config/conexao.php";

$nome = mysqli_real_escape_string($conexao,$_POST['nome']);
$email =  mysqli_real_escape_string($conexao,$_POST['email']);
$senha =  mysqli_real_escape_string($conexao,md5($_POST['senha']));

$sql = "SELECT COUNT(*) AS total FROM usuarios WHERE email = '$email'";

$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
    $_SESSION['usuario_existe'] = true;
    header('Location: pageRegister.php');
    exit;
}

$sql = "INSERT INTO usuarios (nome, email, senha, data) VALUES ('$nome', '$email', '$senha', NOW())";


if($conexao->query($sql) === TRUE) {
    $_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: pageRegister.php');
exit;
?>