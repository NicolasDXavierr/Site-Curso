<?php
session_start();
include '../../config/conexao.php';
$idCursoSelecionado = $_POST['idCursoSelecionado'];
$emailUsuario = $_SESSION['email'];

// Executar a stored procedure
$query = "CALL sp_web_statusInscricao(?, ?)";
$stmt = $GLOBALS['conexao']->prepare($query);
$stmt->bind_param('si', $emailUsuario, $idCursoSelecionado);
$stmt->execute();

// Verificar se a stored procedure foi executada com sucesso
if ($stmt->affected_rows > 0) {
    // Ação bem-sucedida, redirecionar ou exibir mensagem de sucesso, se necessário
    $_SESSION['inscrito'] = true; // Definir a variável de sessão 'inscrito' como true
    header("Location: home.php"); // Redirecionar para a página home.php
    exit();
} else {
    echo "<script>alert('Você já inscrito neste curso.');
    window.location.href = 'home.php';
    </script>";
    exit();
}
?>
