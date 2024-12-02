<?php
include 'conexao.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Recuperar usuário
    $stmt = $conexao->prepare("SELECT * FROM tb_usuario WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Atualizar usuário
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $tipo_perfil = $_POST['tipo_perfil'];

    $stmt = $conn->prepare("UPDATE tb_usuario SET nome = :nome, cpf = :cpf, email = :email, tipo_perfil = :tipo_perfil WHERE id = :id");
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':cpf', $cpf);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':tipo_perfil', $tipo_perfil);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Editar Usuário</title>
</head>
<body>
    <header>
        <h1>Editar Usuário</h1>
    </header>
    <form method="POST">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="<?php echo $usuario['nome']; ?>" required><br>
        
        <label for="cpf">CPF:</label>
        <input type="text" name="cpf" id="cpf" value="<?php echo $usuario['cpf']; ?>" required><br>
        
        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email" value="<?php echo $usuario['email']; ?>" required><br>
        
        <label for="tipo_perfil">Tipo de Perfil:</label>
        <input type="text" name="tipo_perfil" id="tipo_perfil" value="<?php echo $usuario['tipo_perfil']; ?>" required><br>
        
        <button type="submit">Salvar</button>
    </form>
</body>
</html>