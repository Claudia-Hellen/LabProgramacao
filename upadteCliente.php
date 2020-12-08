<?php
require_once ('conexao.php');

if(isset($_POST['altCliente'])):
        $nome = mysqli_escape_string($strcon, $_POST['nome']);
        $cpf = mysqli_escape_string($strcon, $_POST['cpf']);
        $celular = mysqli_escape_string($strcon, $_POST['celular']);
        $email = mysqli_escape_string($strcon, $_POST['email']);

        $id = mysqli_escape_string($strcon, $_POST['id']);
        $sql = "UPDATE clientes SET nome ='$nome', cpf='$cpf', celular ='$celular', email='$email' WHERE id='$id'";

        if(mysqli_query($strcon, $sql)):
            header('Location: tCliente.php');
            else:
            header('Location: edCliente.php?erro');
        endif;
endif;

if(isset($_POST['altProd'])):

    $nome = mysqli_escape_string($strcon, $_POST['nome']);
    $codbarras = mysqli_escape_string($strcon, $_POST['ean']);
    $preco = mysqli_escape_string($strcon, $_POST['preco']);
    $id = mysqli_escape_string($strcon, $_POST['id']);
    $sql = "UPDATE produto SET nome ='$nome', ean='$codbarras', preco ='$preco' WHERE id='$id'";

    if(mysqli_query($strcon, $sql)):
        $_SESSION['mensagem'] = "Alterado com sucesso!";
        header('Location: tProduto.php');
        else:
        $_SESSION['mensagem'] = "Erro ao cadastrar";
        header('Location: edProduto.php');
    endif;
endif;

if(isset($_POST['altUser'])):

    $nome = mysqli_escape_string($strcon, $_POST['nome']);
    $login = mysqli_escape_string($strcon, $_POST['email']);
    $senha = mysqli_escape_string($strcon, md5($_POST['senha']));
    $id = mysqli_escape_string($strcon, $_POST['id']);

    $sql = "UPDATE users SET nome ='$nome', email ='$login', senha ='$senha' WHERE id='$id'";

    if(mysqli_query($strcon, $sql)):
        $_SESSION['mensagem'] = "Alterado com sucesso!";
        header('Location: tUsuario.php');
        else:
        $_SESSION['mensagem'] = "Erro ao cadastrar";
        header('Location: edUsuario.php');
    endif;
endif;