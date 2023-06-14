<?php
session_start();
include '../../config/conexao.php';
include '../../funcoes/funcoes.php';

if (!isset($_SESSION['email'])) {
    header('Location: http://localhost/projetoCurso2/index.php');
    exit();
} else {
    $emailUsuario = $_SESSION['email'];
    $usuarioExiste = verificarUsuarioNoBanco($conexao, $emailUsuario);

    if (!$usuarioExiste) {
        header('Location: http://localhost/projetoCurso2/index.php');
        exit();
    }
}
?>