<?php
include 'conexao.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Deletar usuário
    $stmt = $conexao->prepare("DELETE FROM tb_usuario WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    header('Location: index.php');
}
?>