<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>G.R.E.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/wpp.css">
    <link rel="stylesheet" href="css/aluno.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Cabin&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <?php
        if(!isset($_SESSION)){
            session_start();
        }
        if(!isset($_SESSION['verify'])){
            die("<br>Você não pode acessar esta página pois não está logado.<br><a href=\"instrutorLogin.php\">Conectar-se</a>");
        }
    ?>
    <script type="text/javascript">
        function lista(){
            var json = {};
            json.action = 'select';
            json.type = 'lista';

            $.ajax({
                url: "php/DAO.php",
                data: json,
                type: "post",
                success: function(resp){
                    var obj_json = JSON.parse(resp);

                    var select_aluno = document.querySelector("#select-aluno");
                    select_aluno.innerHTML = "";

                    for (var i=0; i < obj_json.length; i++){
                        select_aluno.innerHTML += `<option value="`+i+`" id="option_value">`+obj_json[i].id + " | " + obj_json[i].nome+`</option>`;
                    }
                }
            });
        }
        lista();
        function dados(){
            var json = {};
            json.option_value  = document.querySelector("#select-aluno").value;
            json.action = 'select';
            json.type = 'dados';

            $.ajax({
                url: "php/DAO.php",
                data: json,
                type: "post",
                success: function(resp){
                    obj_json2 = JSON.parse(resp);
    
                    document.querySelector("#nome").innerHTML   = "Nome: " + obj_json2[json.option_value].nome;
                    document.querySelector("#idade").innerHTML  = "Idade: " + obj_json2[json.option_value].idade;
                    if (obj_json2[json.option_value].tipotreino == 1){
                        document.querySelector("#tipotreino").innerHTML = `
                            Tipo de Treino: 
                            <select name="tipotreino-select" id="tipotreino-select">
                                <option value="1" selected>1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                            <input type="button" value="Confirmar" onClick="update_treino()">`;
                        document.querySelector("#d2-treinos").innerHTML = `
                            <div class="d2-d1">
                                <h2>Treino A</h2>
                                <div class="treino">
                                    Gêmeos sentado    | 4 X 8-10 reps<hr><br> 
                                    Abdominal crunch  | 4 X 8-10 reps<hr><br> 
                                    Abdominal oblíquo | 3 X 8-10 reps<hr><br>
                                    Barra fixa        | 5 X 10 reps<hr><br>
                                    Remada baixa      | 4 X 10 reps<hr><br>
                                    Puxada alta       | 3 X 10 reps<hr><br>
                                    Rosca alternada   | 4 X 10 reps<hr><br>
                                </div>
                            </div>
                            <div class="d2-d2">
                                <h2>Treino B</h2>
                                <div class="treino">
                                    Supino            | 5 X 8 reps<hr><br>
                                    Supino inclinado  | 4 X 8 reps<hr><br>
                                    Peck deck fly     | 3 X 10 reps<hr><br>
                                    Desenvolvimento   | 4 X 8 reps<hr><br>
                                    Crucifixo máquina | 5 X 6-8 reps<hr><br> 
                                    Mergulho          | 5 X 6-8 reps<hr><br> 
                                    Rosca direta      | 5 X 6-8 reps<hr><br> 
                                </div>
                            </div>
                            <div class="d2-d3">
                                <h2>Treino C</h2>
                                <div class="treino">
                                    Cadeira adutora   | 5 X 8  reps<hr><br>
                                    Cadeira abdutora  | 4 X 8  reps<hr><br>
                                    Afundo            | 3 X 10 reps<hr><br>
                                    Stiff             | 4 X 8  reps<hr><br>
                                    Gêmeos sentado    | 3 X 15 reps<hr><br>
                                    Agachamento       | 3 X 6  reps<hr><br>
                                    Panturrilha       | 4 X 15 reps<hr><br>
                                </div>
                            </div>`;
                    }
                    else if (obj_json2[json.option_value].tipotreino == 2){
                        document.querySelector("#tipotreino").innerHTML = `
                            Tipo de Treino: 
                            <select name="tipotreino-select" id="tipotreino-select">
                                <option value="1">1</option>
                                <option value="2" selected>2</option>
                                <option value="3">3</option>
                            </select>
                            <input type="button" value="Confirmar" onClick="update_treino()">`;
                        document.querySelector("#d2-treinos").innerHTML = `
                            <div class="d2-d1">
                                <h2>Treino A</h2>
                                <div class="treino">
                                    Levantamento Terra  | 5 X 4-6 reps<hr><br> 
                                    Agachamento Frontal | 4 X 4-6 reps<hr><br> 
                                    Afundo              | 4 X 8-10 reps<hr><br> 
                                    Elevação de quadril | 3 X 8-10 reps<hr><br> 
                                    Gêmeos sentado      | 4 X 8-10 reps<hr><br> 
                                    Abdominal crunch    | 4 X 8-10 reps<hr><br> 
                                    Abdominal oblíquo   | 3 X 8-10 reps<hr><br> 
                                </div>
                            </div>
                            <div class="d2-d2">
                                <h2>Treino B</h2>
                                <div class="treino">
                                    Supino           | 5 X 6-8  reps<hr><br> 
                                    Supino inclinado | 3 X 8-10 reps<hr><br>
                                    Barra fixa       | 5 X 6-8  reps<hr><br> 
                                    Remada baixa     | 3 X 8-10 reps<hr><br>
                                    Desenvolvimento  | 5 X 6-8  reps<hr><br> 
                                    Mergulho         | 5 X 6-8  reps<hr><br> 
                                    Rosca direta     | 5 X 6-8  reps<hr><br> 
                                </div>
                            </div>
                            <div class="d2-d3">
                                <h2>Treino C</h2>
                                <div class="treino">
                                    Agachamento       | 5 X 4-6 reps<hr><br>
                                    Stiff             | 4 X 4-6 reps<hr><br>
                                    Avanço            | 4 X 8-10 reps<hr><br>
                                    Leg Press         | 3 X 8-10 reps<hr><br>
                                    Panturrilha       | 4 X 8-10 reps<hr><br>
                                    Mesa flexora      | 3 X 10 reps<hr><br>
                                    Extensora lombar  | 3 X 10 reps<hr><br>
                                </div>
                            </div>`;
                    }
                    else if (obj_json2[json.option_value].tipotreino == 3){
                        document.querySelector("#tipotreino").innerHTML = `
                            Tipo de Treino: 
                            <select name="tipotreino-select" id="tipotreino-select">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3" selected>3</option>
                            </select>
                            <input type="button" value="Confirmar" onClick="update_treino()">`;
                        document.querySelector("#d2-treinos").innerHTML = `
                            <div class="d2-d1">
                                <h2>Treino A</h2>
                                <div class="treino">
                                Barra fixa        | 5 X 10 reps<hr><br>
                                    Remada baixa      | 4 X 10 reps<hr><br>
                                    Puxada alta       | 3 X 10 reps<hr><br>
                                    Rosca alternada   | 4 X 10 reps<hr><br>
                                    Rosca direta      | 3 X 10 reps<hr><br>
                                    Abdominal crunch  | 3 X 10 reps<hr><br>
                                    Abdominal oblíquo | 4 X 10 reps<hr><br>
                                </div>
                            </div>
                            <div class="d2-d2">
                                <h2>Treino B</h2>
                                <div class="treino">
                                    Supino           | 5 X 8  reps<hr><br>
                                    Supino inclinado | 4 X 8  reps<hr><br>
                                    Peck deck fly    | 3 X 10 reps<hr><br>
                                    Desenvolvimento  | 4 X 8  reps<hr><br>
                                    Elevação lateral | 3 X 10 reps<hr><br>
                                    Mergulho         | 3 X 10 reps<hr><br>
                                    Tríceps corda    | 4 X 10 reps<hr><br>
                                </div>
                            </div>
                            <div class="d2-d3">
                                <h2>Treino C</h2>
                                <div class="treino">
                                    Agachamento       | 5 X 10 reps<hr><br>
                                    Leg Press         | 4 X 10 reps<hr><br>
                                    Extensora         | 3 X 10 reps<hr><br>
                                    Stiff             | 4 X 10 reps<hr><br>
                                    Mesa flexora      | 3 X 10 reps<hr><br>
                                    Extensora lombar  | 3 X 10 reps<hr><br>
                                    Panturrilha       | 4 X 10 reps<hr><br>
                                </div>
                            </div>`;
                    }
                    document.querySelector("#plano").innerHTML = "Plano: " + obj_json2[json.option_value].plano;
                    document.querySelector("#email").innerHTML = "E-mail: " + obj_json2[json.option_value].email;
                    document.querySelector("#tel").innerHTML   = "Telefone: " + obj_json2[json.option_value].tel;
                    document.querySelector("#cpf").innerHTML   = obj_json2[json.option_value].cpf;
                    document.querySelector("#cpf-text").style.visibility = "visible";
                    document.querySelector("#dados-cadastro").style.visibility = "visible";
                }
            });
        }
        
        function update_treino(){
            var json = {};
            json.tipotreino = document.querySelector("#tipotreino-select").value;
            json.cpf = obj_json2[document.querySelector("#select-aluno").value].cpf;
            json.action = 'update';
            json.type = 'treino';

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
        <div class="d1">
            <br>
            <form type="post">
                <select name="select-aluno" id="select-aluno">
                </select>
                <input type="button" value="Confirmar" onClick="dados()">
            </form>
            <br>
            <h2 id="dados-cadastro" style="visibility: hidden;">Dados do Cadastro</h2>
            <p id="nome"></p>
            <p id="idade"></p>
            <p id="tipotreino"></p>
            <p id="plano"></p>
            <p id="email"></p>
            <p id="tel"></p>
            <p id="cpf-text" style="visibility: hidden;">CPF: <span id="cpf"></span></p>
            <br>
            <p><a href="php/logout.php" class="logout">Deslogar</a></p>
        </div>
        <div class="d2" id="d2-treinos">
        </div>
    </main>

    <footer>
        <div><a href="https://wa.me/5511998269000?text="><i class="fa fa-whatsapp"></i></a></div>
        <div class="rodape"></div>
    </footer>
</body>
</html>