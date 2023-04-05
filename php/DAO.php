<?php
    include('conexao.php');

    $nome       = isset($_POST["nome"])?$_POST["nome"]:"";
    $senha      = isset($_POST["senha"])?md5($_POST["senha"]):"";
    $email      = isset($_POST["email"])?$_POST["email"]:"";
    $cpf        = isset($_POST["cpf"])?$_POST["cpf"]:"";
    $idade      = isset($_POST["idade"])?$_POST["idade"]:"";
    $tel        = isset($_POST["tel"])?$_POST["tel"]:"";
    $plano      = isset($_POST["plano"])?$_POST["plano"]:"";
    $tipotreino = isset($_POST["tipotreino"])?$_POST["tipotreino"]:"";
    $action     = isset($_POST["action"])?$_POST["action"]:"";
    $type       = isset($_POST["type"])?$_POST["type"]:"";

    /* Insert */
    if ($action == "insert" && $type == "aluno"){
        $sql_code = "SELECT * FROM aluno WHERE email = '$email'";
        $sql_query = $conn->query($sql_code) or die("Falha na execução do código SQL: " . $conn->error);
        $qtd_bool = $sql_query->num_rows;

        if ($qtd_bool == 1){
            echo "Já existe um Usuário com esse E-mail cadastrado!";
            die();
        }
        else {
            $sql = "insert into aluno (nome, senha, email, cpf, idade, tel, plano, tipotreino) values ('{$nome}', '{$senha}', '{$email}', '{$cpf}', {$idade}, '{$tel}', '{$plano}', '1')";
            $result = mysqli_query($conn, $sql);

            if (mysqli_affected_rows($conn)>0){
                echo "Usuário cadastrado com sucesso!";
            }
            else {
                echo "Não foi possível cadastrar o usuário, tente novamente!";
            }
        }        
    }
    elseif ($action == "insert" && $type == "instrutor"){
        $sql_code = "SELECT * FROM instrutor WHERE email = '$email'";
        $sql_query = $conn->query($sql_code) or die("Falha na execução do código SQL: " . $conn->error);
        $qtd_bool = $sql_query->num_rows;

        if ($qtd_bool == 1){
            echo "Já existe um Usuário com esse E-mail cadastrado!";
            die();
        }
        else {
            $sql = "insert into instrutor (nome, senha, email, verify) values ('{$nome}', '{$senha}', '{$email}', '1')";
            $result = mysqli_query($conn, $sql);

            if (mysqli_affected_rows($conn)>0){
                echo "Instrutor cadastrado com sucesso!";
            }
            else {
                echo "Não foi possível cadastrar o Instrutor, tente novamente!";
            }
        }
    }

    /* Update */
    elseif ($action == "update" && $type="treino"){
        $sql = "update aluno set tipotreino = '{$tipotreino}' where cpf = '{$cpf}'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_affected_rows($conn)>0){
            echo "Dados modificados com sucesso!";
        }
        else {
            echo "CPF: $cpf\nNão foi possível modificar os dados!";
        }
    }

    /* Delete */
    elseif ($action == "delete"){
        $sql = "delete from aluno where nome = {$nome}";
        $result = mysqli_query($conn, $sql);

        if (mysqli_affected_rows($conn)>0){
            echo "Dados apagados com sucesso!";
        }
        else {
            echo "Não foi possível apagar os dados!";
        }
    }

    /* Select */
    elseif ($action == "select" && $type="lista"){
        $sql = "select * from aluno";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)){
		    $rows[] = $row;
	    }
	    echo json_encode($rows);
	}
    elseif ($action == "select" && $type="dados"){
        $sql = "select * from aluno where id = $id";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)){
		    $rows[] = $row;
	    }
	    echo json_encode($rows);
	}
    mysqli_close($conn);
?>