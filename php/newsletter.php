<?php
    include('conexao.php');

    $email = isset($_POST["email"])?$_POST["email"]:"";

    if ($email == ""){
        echo "Preencha o campo E-mail por favor";
        die();
    }

    $sql_code = "SELECT * FROM newsletter WHERE email = '$email'";
    $sql_query = $conn->query($sql_code) or die("Falha na execução do código SQL: " . $conn->error);
    $qtd_bool = $sql_query->num_rows;

    if ($qtd_bool == 1){
        echo "Esse E-mail já está inscrito!";
        die();
    }
    else {
        $sql = "insert into newsletter (email) values ('{$email}')";
        $result = mysqli_query($conn, $sql);

        if (mysqli_affected_rows($conn)>0){
            echo "E-mail inscrito com sucesso!";
        }
        else {
            echo "Houve um erro durante a Inscrição, tente novamente!";
        }
    }      
?>