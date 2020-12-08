<?php
include('verifica_login.php');
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<title>SUMADEV - EDITAR USUÁRIO</title>
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
<?php
include_once 'conexao.php';
if(isset($_GET['id'])):
    $id = mysqli_escape_string($strcon, $_GET['id']);

    $sql = "SELECT * FROM users WHERE id = '$id'";
    $resultado = mysqli_query($strcon, $sql);
    $dados = mysqli_fetch_array($resultado); 
endif;
?>
<div id="formUser">
  <form method="POST" action="upadteCliente.php">
  <input type="hidden" name="id" value="<?php echo $dados['id'];?>">
    <h1>Editar Usuario</h1>
    <input type="hidden" name="id" value="<?php echo $dados['id'];?>">
    <label>Nome Sobrenome</label><input type="text" name="nome" value="<?php echo $dados['nome'];?>" required><br>
    <label>Login</label><input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" value="<?php echo $dados['email'];?>" required><br>    
    <label>Senha</label><input type="password" name="senha" id="senha" value="<?php echo $dados['senha'];?>" required><br>
  
    <button type="submit" id="cadastrar" name="altUser">Atualizar</button>
</form>
</div>
</body>
</html>