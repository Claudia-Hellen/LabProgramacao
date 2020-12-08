<?php
include('verifica_login.php');
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>SUMADEV - HOME</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css"  href="css/style.css" />
<link rel="sortcut icon" href="imagens/favicon.ico" type="image/x-icon" />
</head>
<body>
    <div id="fundo">
        <img src="imagens/fundo.png">
    </div>
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

  <div id="geral">
    <div id="cabecalho">Clientes</div>
        <div id="conteudo-1"><a href="tCliente.php"><input type=image src="imagens/consultar.png"></a></div>
        <div id="conteudo-2-1"><a href="cadCliente.php"><input type=image src="imagens/inserir.png"></a></div>
   </div>

        <div id="cabecalho1">Produtos</div>
        <div id="conteudo-2"><a href="tProduto.php"><input type=image src="imagens/consultar.png"></a></div>
            <div id="conteudo-3-1"><a href="cadProduto.php"><input type=image src="imagens/inserir.png"></a></div>
        </div>
    </div>

</div>
</div>
</body>
</html>