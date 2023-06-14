<?php
session_start();
include '../../funcoes/funcoes.php';
include '../../config/conexao.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $infCurso = informacoesCurso($id, $conexao); // Inclua a conexão como parâmetro

    // Verifica se as informações do curso foram encontradas
    if ($infCurso !== false) {
        // Define o cabeçalho como JSON
        header('Content-Type: application/json');
        // Retorna as informações do curso em formato JSON
        echo json_encode($infCurso);
    } else {
        // Retorna uma mensagem de erro caso as informações do curso não sejam encontradas
        echo json_encode(['error' => 'Informações do curso não encontradas.']);
    }
} else {
    // Retorna uma mensagem de erro caso a ID do curso não seja fornecida
    echo json_encode(['error' => 'ID do curso não fornecido.']);
}
?>
