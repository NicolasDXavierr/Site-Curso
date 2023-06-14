<?php 
// session_start();
// include 'conexao.php';

// if(empty($_POST['email']) || empty($_POST['senha']) ||empty($_POST['nome'])) {
//     header('Location: index.php');
//     exit();
// }

// $email = mysqli_real_escape_string($conexao, $_POST['email']);
// $senha = mysqli_real_escape_string($conexao, $_POST['senha']);
// $senha = mysqli_real_escape_string($conexao, $_POST['nome']);

// $email = $_POST['email'];
// $senha = $_POST['senha'];
// $nome_usuario = $_POST['nome'];


// $query = "SELECT * FROM `usuarios` WHERE email= '{$email}' AND senha = md5('{$senha}')";

// $result = mysqli_query($conexao, $query);

// $row = mysqli_num_rows($result);

// if($row == 1) {
//     $_SESSION['email'] = $email;
//     header('Location: home.php');
//     exit();
// } else {
//     $_SESSION['nao_autenticado'] = true; 
//     header('Location: index.php');
//     exit();
// }

?>