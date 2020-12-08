<?php
include('verifica_login.php');
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>SUMADEV - CAD. PRODUTO</title>
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
<div id="formProd">
  <form method="POST" action="addCliente.php">

    <h1>Novo Produto</h1>
    <label>ID</label>
    <input type="text" name="cod" id="codprod" style="width:15%; padding:5px;" pattern="[0-9]{1,3}" required><br/>
    <label>Nome</label>
    <input type="text" name="nomeprod" id="nprod" placeholder="Nome do Produto" required> 
    <label>Codigo de Barras</label>
    <input type="text" name="ean" class="right1"  minlength="13" maxlength="13" pattern="[0-9]{13}" 
    onkeypress='return event.charCode >= 48 && event.charCode <= 57' placeholder="Codigo de barras" id="ean"><br>
    <label>Preço de venda</label>
    <input type="text" name="preco" pattern="[0-9]{1,3}+,[0-9]{2}" placeholder="R$ Venda.: ex: 15,00" id="venda" required><br>
    <button value="Cadastrar" id="cadastrar" name="sProd">Salvar</button>
</form>
</div>
</body>
</html>