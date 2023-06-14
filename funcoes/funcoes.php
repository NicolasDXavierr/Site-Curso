<?php
if (!function_exists('informacoesCurso')) {
    function informacoesCurso($id, $conexao) {
        $query = "CALL sp_web_cursos($id)";
        
        // Executar a consulta
        $result = mysqli_multi_query($conexao, $query);
    
        // Verificar se a consulta foi executada com sucesso
        if ($result) {
            // Obter o resultado da consulta
            $cursoInfo = mysqli_store_result($conexao);
            
            // Verificar se há resultados
            if ($cursoInfo) {
                // Obter o primeiro resultado da consulta
                $curso = mysqli_fetch_assoc($cursoInfo);
                
                // Liberar a memória do resultado
                mysqli_free_result($cursoInfo);
                
                // Retornar as informações do curso
                return $curso;
            } else {
                // Tratar caso a consulta não retorne resultados
                return false;
            }
        } else {
            // Tratar erros de consulta, se necessário
            return false;
        }
    }
}

if (!function_exists('renderizarMenu')) {
    function renderizarMenu($conexao) {
        $query = "CALL sp_web_renderizarMenu()";
        
        // Executar a consulta
        $result = mysqli_multi_query($conexao, $query);
    
        // Verificar se a consulta foi executada com sucesso
        if ($result) {
            // Obter o resultado da consulta
            $menu = mysqli_store_result($conexao);
            
            // Verificar se há resultados
            if ($menu) {
                $menuRenderizar = []; // Inicializa a variável $menuRenderizar como um array vazio
    
                // Obter todos os resultados da consulta
                while ($row = mysqli_fetch_assoc($menu)) {
                    $menuRenderizar[] = $row; // Adiciona cada resultado ao array $menuRenderizar
                }
                
                // Liberar a memória do resultado
                mysqli_free_result($menu);
                
                // Retornar as informações do menuRenderizar
                return $menuRenderizar;
            } else {
                // Tratar caso a consulta não retorne resultados
                return false;
            }
        } else {
            // Tratar erros de consulta, se necessário
            return false;
        }
    }
}

if (!function_exists('verificarUsuarioNoBanco')) {
    function verificarUsuarioNoBanco($conexao, $emailUsuario)
    {
        $sql = "SELECT COUNT(*) FROM usuarios WHERE email = ?";
        $stmt = $conexao->prepare($sql);
        $stmt->bind_param('s', $emailUsuario);
        $stmt->execute();
        $result = $stmt->get_result();
        $count = $result->fetch_assoc()['COUNT(*)'];
        $stmt->close();

        return $count > 0;
    }
}

?>