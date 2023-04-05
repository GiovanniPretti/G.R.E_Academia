<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>G.R.E.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/wpp.css">
    <link rel="stylesheet" href="css/index.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Cabin&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        function imc(){
            var json = {};
            json.peso = document.querySelector("#peso").value;
            json.altura = document.querySelector("#altura").value;
            json.sexo = document.querySelector("#sexo").value;

            $.ajax({
                url: "php/imc.php",
                data: json,
                type: "post",
                success: function(resp){
                    alert(resp);
                }
            });
        }

        function newsletter(){
            var json = {};
            json.email = document.querySelector("#email").value;

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
            <li><a href="index.php" class="active">Home</a></li>
            <li><a href="alunoLogin.php">Área do Aluno</a></li>
            <li><a href="instrutorLogin.php">Área do Instrutor</a></li>
            <li><a href="contato.php">Fale Conosco</a></li>
        </ul>
    </header>

    <main>
        <div class="container1">
            <a href=""><img src="img/landingpage.jpg"></a>
        </div>

        <div class="container2">
            <div class="c2-div1">
                <br>
                <p class="p1">O QUE É IMC?</p>
                <p class="p2">Para a sua posição na tabela do Índice de Massa Corporal, você precisa de dois valores: seu peso e altura. É só dividir o peso (em quilos) pelo quadrado da altura (em metros), que é obtido pela multiplicação da altura por ela mesma. Então, a fórmula fica assim: IMC = Peso / Altura².</p>
            </div>

            <div class="c2-div2">
                <form method="POST">
                    <br>
                    <label for="peso">Calculadora de IMC</label><br>
                    <p>Calcule aqui o seu IMC</p>
                    <p><input type="number" name="peso" id="peso" placeholder="Peso">
                    <input type="number" name="altura" id="altura" placeholder="Altura"></p>
                    <input type="number" name="altura" id="altura" placeholder="Idade">
                    <select name="sexo" id="sexo">
                        <option value="m">Masculino</option>
                        <option value="f">Feminino</option>
                    </select>
                    <br>
                    <input type="button" value="Calcular" onClick="imc()">
                </form>
            </div>
        </div>

        <div class="container3-parallax">
            <br><br>
            <div class="newsletter">
                <form method="POST">
                    <label for="email">Inscreva-se em Nossa Newsletter</label><br>
                    <p>Inscreva-se e receba nossos artigos mais recentes em sua caixa de entrada</p>
                    <input type="email" name="email" id="email" placeholder="exemplo@mail.com">
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