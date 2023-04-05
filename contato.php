<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>G.R.E.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/wpp.css">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/index.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Cabin&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <style type="text/css">
        .background-img {
            background-image: url("img/bg4.jpg");
        }
    </style>
    <script>
        function newsletter(){
            var json = {};
            json.email = document.querySelector("#email-newsletter").value;

            $.ajax({
                url: "php/newsletter.php",
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
            <li><a href="instrutorLogin.php">Área do Instrutor</a></li>
            <li><a href="contato.php" class="active">Fale Conosco</a></li>
        </ul>
    </header>

    <main>
        <div class="background-img">
            <div class="form">
                <p>Fale Conosco</p><hr>
                <label class="required" for="nome">Nome</label>
                <input type="text" id="nome" placeholder="Informe seu nome" name="nome" autofocus required><br>
                <label class="required" for="email">Email</label> 
                <input type="email" id="email" placeholder="exemplo@mail.com" name="email" required><br>
                <label for="tel">Telefone</label> 
                <input type="tel" id="tel" name="tel" placeholder="(__)_____-____"><br>
                <label class="required" for="msg">Deixe sua mensagem</label>
                <textarea name="msg" id="msg" cols="50" rows="5" placeholder="Mensagem" maxlength="512"></textarea><br>
                <input type="button" value="Enviar" onClick="Enviar()">
            </div>

            <br><br>

            <div class="newsletter">
                <form method="POST">
                    <label for="email">Inscreva-se em Nossa Newsletter</label><br>
                    <p>Inscreva-se e receba nossos artigos mais recentes em sua caixa de entrada</p>
                    <input type="email" name="email-newsletter" id="email-newsletter" placeholder="exemplo@mail.com">
                    <input type="button" value="Inscrever-se" onClick="newsletter()">
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