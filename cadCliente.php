<?php
include('verifica_login.php');
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<title>SUMADEV - CADASTRO CLIENTE</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css"  href="css/style.css" />
<link rel="sortcut icon" href="imagens/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

        <a href="#"><img src="imagens/logo.png" id="logop"></a>
    

    <nav>
      <ul>
        <li><a href="home.php">Inicio</a></li>
        <li><a href="sobre.php">Sobre</a></li>
        <li>
          <a href="#0">Cadastrar</a>
          <ul>
            <li><a href="cadCliente.php">Clientes</a></li>
            <li><a href="cadProduto.php">Produtos</a></li>
            <li><a href="cadUsuario.php">Usuários</a></li>
          </ul>
        </li>
        <li>
          <a href="#0">Consultar</a>
          <ul>
            <li><a href="tCliente.php">Clientes</a></li>
            <li><a href="tProduto.php">Produto</a></li>
            <li><a href="tUsuario.php">Usuários</a></li>
          </ul>
        </li>
        <li><a href="logout.php">Sair</a></li>
      </ul>
      </nav>
<div id="formCliente">
  <form method="POST" action="addCliente.php">

    <h1>Novo Cliente</h1>
    <label>Nome Sobrenome:</label><input type="text" name="nome" required><br>
    <label>CPF:</label><input type="text" name="cpf" pattern="[0-9]{11}" required><br>
    <label>Celular:</label><input type="text" name="celular" pattern="[0-9]{2}[0-9]{9}" required><br>
    <label>Email:</label><input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"><br>    
    <button value="Cadastrar" id="sCliente" name="sCliente">Salvar</button>
</form>
</div>
</body>
</html>