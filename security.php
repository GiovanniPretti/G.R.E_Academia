<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>G.R.E.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/wpp.css">
    <link rel="stylesheet" href="css/form.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Cabin&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css">
        .background-img {
            background-image: url("img/bg3.jpg");
        }
    </style>
    <?php
         if(isset($_POST['usuario']) || isset($_POST['senha'])){
            $usuario = $_POST['usuario'];
            $senha = $_POST['senha'];

            if($usuario == "admin" && $senha == "admin"){ // Trocar conforme necessário
                header("Location: cad_instrutor.php");
            }
         }
    ?>
    <script>
        alert("Usuário: admin\nSenha: admin\n\nEsse alert não existiria em contextos normais")
    </script>
</head>
<body>
    <header>
        <ul>
            <a href="index.php" class="logo"><img src="img/logo.png"></a>
            <li><a href="index.php">Home</a></li>
            <li><a href="alunoLogin.php">Área do Aluno</a></li>
            <li><a href="instrutorLogin.php">Área do Instrutor</a></li>
            <li><a href="contato.php">Fale Conosco</a></li>
        </ul>
    </header>

    <main>
        <div class="background-img">
            <div class="form">
                <p>Login de Admnistrador para Autenticação</p><hr>
                <form method="POST">
                    <label for="usuario">Usuário</label>
                    <input class="required" type="text" name="usuario" id="usuario" placeholder="Usuário de Administrador" required><br>
                    <label for="senha">Senha</label>
                    <input class="required" type="password" name="senha"  id="senha" placeholder="********" required><br>
                    <button type="submit">Entrar</button>
                </form>
            </div>
        </div>
    </main>

    <footer>
        <div><a href="https://wa.me/5511998269000?text="><i class="fa fa-whatsapp"></i></a></div>
        <div class="rodape"></div>
    </footer>
</body>
</html>