<?php
include 'conexao.php'; // Assegure-se de que este arquivo exista e tenha a conexão correta.

try {
    // Recuperar usuários
    $stmt = $conexao->prepare("SELECT * FROM tb_usuario");
    $stmt->execute();
    $usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Erro ao recuperar usuários: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Gerenciamento de Usuários</title>
    <style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
}

header {
    background-color: #007BFF; /* Azul */
    color: white;
    padding: 20px;
    text-align: center;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin: 20px 0;
}

th, td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
}

th {
    background-color: #007BFF; /* Azul */
    color: white;
}

tr:hover {
    background-color: #f1f1f1;
}

a {
    text-decoration: none;
    margin: 0 5px;
    color: #007BFF; /* Azul */
}
</style>
</head>
<body>
    <header>
        <h1>Gerenciamento de Usuários</h1>
    </header>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>CPF</th>
                <th>E-mail</th>
                <th>Tipo de Perfil</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php if (count($usuarios) > 0): ?>
                <?php foreach ($usuarios as $usuario): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($usuario['nome']); ?></td>
                        <td><?php echo htmlspecialchars($usuario['cpf']); ?></td>
                        <td><?php echo htmlspecialchars($usuario['email']); ?></td>
                        <td><?php echo htmlspecialchars($usuario['tipo_perfil']); ?></td>
                        <td>
                            <a href="edit_user.php?id=<?php echo $usuario['id']; ?>">🖉 Editar</a>
                            <a href="delete_user.php?id=<?php echo $usuario['id']; ?>" onclick="return confirm('Tem certeza que deseja deletar?');">🗑 Deletar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5">Nenhum usuário encontrado.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>