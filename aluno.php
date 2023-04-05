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
    <?php
        if(!isset($_SESSION)){
            session_start();
        }
        if(!isset($_SESSION['cpf'])){
            die("<br>Você não pode acessar esta página pois não está logado.<br><a href=\"alunoLogin.php\">Conectar-se</a>");
        }
    ?>
</head>
<body>
    <header>
        <ul>
            <a href="index.php" class="logo"><img src="img/logo.png"></a>
            <li><a href="index.php">Home</a></li>
            <li><a href="alunoLogin.php" class="active">Área do Aluno</a></li>
            <li><a href="instrutorLogin.php">Área do Instrutor</a></li>
            <li><a href="contato.php">Fale Conosco</a></li>
        </ul>
    </header>

    <main>
        <div class="d1">
            <h2>Dados do Cadastro</h2>
            <p>Nome: <?=$_SESSION["nome"]?></p>
            <p>Idade: <?=$_SESSION["idade"]?></p>
            <p>Treino: <?=$_SESSION["tipotreino"]?></p>
            <p>Plano: <?=$_SESSION["plano"]?></p>
            <p>E-mail: <?=$_SESSION["email"]?></p>
            <p>Telefone: <?=$_SESSION["tel"]?></p>
            <p>CPF: <?=$_SESSION["cpf"]?></p>
            <br>
            <p><a href="php/logout.php" class="logout">Deslogar</a></p>
        </div>
        <div class="d2">
            <?php if ($_SESSION["tipotreino"] == '1'){ ?>
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
                </div>
            <?php } ?>

            <?php if ($_SESSION["tipotreino"] == '2'){ ?>
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
                </div>
            <?php } ?>

            <?php if ($_SESSION["tipotreino"] == '3'){ ?>
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
                </div>
            <?php } ?>
        </div>
    </main>

    <footer>
        <div><a href="https://wa.me/5511998269000?text="><i class="fa fa-whatsapp"></i></a></div>
        <div class="rodape"></div>
    </footer>
</body>
</html>