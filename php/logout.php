<?php
    if(!isset($_SESSION)){
        session_start();
    }
    if(isset($_SESSION['verify'])){ // Se houver, então deslogou pela página do instrutor
        session_destroy();
        header("Location: ../instrutorLogin.php");
    }
    else { // Caso esteja na página do Aluno
        session_destroy();
        header("Location: ../alunoLogin.php");
    }
?>