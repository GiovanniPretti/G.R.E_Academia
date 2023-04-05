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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <style type="text/css">
        .background-img {
            background-image: url("img/bg3.jpg");
        }
    </style>
    <script>
        function crud(action){
            var json = {};
            json.nome   = document.querySelector("#nome").value;
            json.senha  = document.querySelector("#senha").value;
            json.email  = document.querySelector("#email").value;
            json.action = action;
            json.type = "instrutor";

            $.ajax({
                url: "php/DAO.php",
                data: json,
                type: "post",
                success: function(resp){
                    alert(resp);
                }
            });
        }
    </script>
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
                <p>Cadastro de Instrutores</p><hr>
                <form method="POST">
                    <label for="nome">Nome</label>
                    <input class="required" type="text" name="nome" id="nome" placeholder="Seu Nome Completo" required><br>
                    <label for="email">Email</label>
                    <input class="required" type="email" name="email" id="email" placeholder="exemplo@mail.com" required><br>
                    <label for="senha">Senha</label>
                    <input class="required" type="password" name="senha"  id="senha" placeholder="********" required><br>
                    <input type="button" value="Cadastrar" onClick="crud('insert')">
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