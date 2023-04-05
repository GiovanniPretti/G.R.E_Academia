<?php
    if (!isset($_SESSION)){
        session_start();
    }
    if (isset($_SESSION['verify']) == '1'){
        header("Location: instrutor.php");
    }
?>
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
            background-image: url("img/bg5.jpg");
        }
    </style>
    <?php
        include('php/conexao.php');

        if(isset($_POST['email']) || isset($_POST['senha'])){
            $email = $mysqli->real_escape_string($_POST['email']);
            $senha = md5($mysqli->real_escape_string($_POST['senha']));

            $sql_code = "SELECT * FROM instrutor WHERE email = '$email' AND senha = '$senha'";
            $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);
            $qtd = $sql_query->num_rows;
            if ($qtd == 1){
                $usuario = $sql_query->fetch_assoc(); // Pega os dados do usuário
                if (!isset($_SESSION)){
                    session_start();
                }
                $_SESSION['id'] = $usuario['id'];
                $_SESSION['nome'] = $usuario['nome'];
                $_SESSION['email'] = $usuario['email'];
                $_SESSION['verify'] = $usuario['verify'];

                header("Location: instrutor.php");
            }
            else{
                // Verificar se a culpa da falha é do usuário não estar cadastrado ou de ter errado a senha
                $sql_code = "SELECT * FROM instrutor WHERE email = '$email'";
                $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);
                $qtd = $sql_query->num_rows;
                if ($qtd == 1){
                    ?>
                    <script>
                        alert("Falha ao Logar\nSenha Inválida!");
                    </script>
                    <?php
                }
                else {
                    ?>
                    <script>
                        alert("Falha ao Logar\nUsuário não cadastrado!");
                    </script>
                    <?php
                }
            }
        }
    ?>
</head>
<body>
<header>
        <ul>
            <a href="index.php" class="logo"><img src="img/logo.png"></a>
            <li><a href="index.php">Home</a></li>
            <li><a href="alunoLogin.php">Área do Aluno</a></li>
            <li><a href="instrutorLogin.php" class="active">Área do Instrutor</a></li>
            <li><a href="contato.php">Fale Conosco</a></li>
        </ul>
    </header>

    <main>
        <div class="background-img">
            <div class="form">
                <p>Área do Instrutor</p><hr>
                <form method="POST">
                    <label class="required" for="email">E-mail</label>
                    <input name="email" type="text" id="email" placeholder="exemplo@mail.com" required><br>
                    <label class="required" for="senha">Senha</label>
                    <input name="senha" type="password" id="senha" placeholder="********" required><br>
                    <button type="submit">Entrar</button>
                    <a href="security.php"><input type="button" value="Cadastrar"></a>
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