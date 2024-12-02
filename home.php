<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema: : : : # # #</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
        .header {
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #ffffff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .logo {
            padding: 20px;
            text-align: center;
        }
        nav {
            width: 100%;
            background-color: #007BFF;
        }
        .menu {
            display: flex;
            justify-content: center;
            padding: 10px;
        }
        .menu a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            padding: 5px 10px;
            transition: background-color 0.3s;
        }
        .menu a:hover {
            background-color: #0056b3;
            border-radius: 5px;
        }
        .content {
            display: flex;
            justify-content: space-between;
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }
        .login, .cadastro {
            width: 48%;
            background-color: #ffffff;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .carousel {
            width: 100%;
            max-width: 1200px;
            margin: 20px auto;
            background-color: #ffffff;
            padding: 20px;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .sobre-nos {
            width: 100%;
            max-width: 1200px;
            margin: 20px auto;
            background-color: #ffffff;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
    </style>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="header">
        <div class="logo">
            <h1>LOGO MARCA</h1>
        </div>
        <nav>
            <div class="menu">
                <a href="#">Home</a>
                <a href="#">Sobre</a>
                <a href="#">Serviços</a>
                <a href="#">Contato</a>
            </div>
        </nav>
    </div>
    <div class="content">
        <div class="login">
            <h2>Login Usuário</h2>
            <!-- Formulário de login será inserido aqui -->
        </div>
        <div class="cadastro">
            <h2>Cadastro Usuário</h2>
            <!-- Formulário de cadastro será inserido aqui -->
             <form action="cadastro.php" method="post"> 
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required><br><br>

                <label for="email">Email:</label>
                <input type="text" id="email" name="email" required><br><br>

                <label for="telefone">Telefone:</label>
                <input type="tel" id="telefone" name="telefone" required><br><br>

                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" required><br><br>

                <input type="submit" value="Cadastrar">
            </form>
        </div>
    </div>
    <div id="carrosselImagens" class="carousel slide carousel" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carrosselImagens" data-slide-to="0" class="active"></li>
            <li data-target="#carrosselImagens" data-slide-to="1"></li>
            <li data-target="#carrosselImagens" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="imagem1.jpg" class="d-block w-100" alt="Imagem 1">
            </div>
            <div class="carousel-item">
                <img src="imagem2.jpg" class="d-block w-100" alt="Imagem 2">
            </div>
            <div class="carousel-item">
                <img src="imagem3.jpg" class="d-block w-100" alt="Imagem 3">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carrosselImagens" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carrosselImagens" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Próximo</span>
        </a>
    </div>
    <div class="sobre-nos">
        <h2>Sobre Nós</h2>
        <p>Esta é a seção sobre nós. Aqui, você pode adicionar informações sobre o site.</p>
    </div>
</body>
</html>