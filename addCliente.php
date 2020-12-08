<?php
session_start();
require_once ('conexao.php');

if(isset($_POST['sCliente'])):
        $nome = mysqli_escape_string($strcon, $_POST['nome']);
        $cpf = mysqli_escape_string($strcon, $_POST['cpf']);
        $celular = mysqli_escape_string($strcon, $_POST['celular']);
        $email = mysqli_escape_string($strcon, $_POST['email']);

        $sql = "INSERT INTO clientes (nome, cpf, celular, email) VALUES ('$nome', '$cpf', '$celular', '$email')";

        if(mysqli_query($strcon, $sql)):
            $_SESSION['mensagem'] = "Cadastrado com sucesso!";
            header('Location: tCliente.php');
            else:
            $_SESSION['mensagem'] = "Erro ao cadastrar";
            header('Location: cadCliente.php');
        endif;
endif;


if(isset($_POST['sProd'])):
    $id = mysqli_escape_string($strcon, $_POST['cod']);
    $nome = mysqli_escape_string($strcon, $_POST['nomeprod']);
    $codbarras = mysqli_escape_string($strcon, $_POST['ean']);
    $preco = mysqli_escape_string($strcon, $_POST['preco']);

    $sql = "INSERT INTO produto (id, nome, ean, preco) VALUES ('$id', '$nome', '$codbarras', '$preco')";

    if(mysqli_query($strcon, $sql)):
        $_SESSION['mensagem'] = "Cadastrado com sucesso!";
        header('Location: tProduto.php');
        else:
        $_SESSION['mensagem'] = "Erro ao cadastrar";
        header('Location: tProduto.php');
    endif;
endif;

if(isset($_POST['sUser'])):
    $nome = mysqli_escape_string($strcon, $_POST['nome']);
    $login = mysqli_escape_string($strcon, $_POST['email']);
    $senha = mysqli_escape_string($strcon,$_POST['senha']);
    

    $sql = "INSERT INTO users (nome, email, senha) VALUES ('$nome', '$login', '$senha')";

    if(mysqli_query($strcon, $sql)):
        $_SESSION['mensagem'] = "Cadastrado com sucesso!";
        header('Location: tUsuario.php');
        else:
        $_SESSION['mensagem'] = "Erro ao cadastrar";
        header('Location: tUsuario.php');
    endif;
endif;
