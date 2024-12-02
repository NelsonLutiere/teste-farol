<?php
include "conexao.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obter os dados do formulário
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);
    // Preparar a instrução SQL com parâmetros
    $sql = "INSERT INTO usuario (nome, email, telefone, senha) VALUES (?, ?, ?, ?)";
    
    // Preparar a declaração
    $stmt = $conexao->prepare($sql);
    
    // Checar se a preparação foi bem-sucedida
    if ($stmt) {
        // Associar os parâmetros
        $stmt->bind_param("ssss", $nome, $email, $telefone, $senha);
        
        // Executar a declaração
        if ($stmt->execute()) {
            echo "Usuário cadastrado com sucesso!";
        } else {
            echo "Erro ao cadastrar usuário: " . $stmt->error;
        }
        
        // Fechar a declaração
        $stmt->close();
    } else {
        echo "Erro na preparação da declaração: " . $conexao->error;
    }
}

// Fechar a conexão
$conexao->close();

?>