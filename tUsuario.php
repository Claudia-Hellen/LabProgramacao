<?php
include_once('conexao.php');
include('verifica_login.php');
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>SUMADEV - USUARIOS</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css"  href="css/style.css" />
<link rel="sortcut icon" href="imagens/favicon.ico" type="image/x-icon" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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

      <a href="cadUsuario.php"><img src="imagens/add.png" id="addCliente"></a>
      <div id="row">
  
  <h3 class="light"> Usuários Cadastrados </h3>
    <table id='usercad'>
      <thead>
        <tr>
             <th>Nome</th>
             <th>Email</th>
             <th colspan="2">Ações</th>
        </tr>
      </thead>

   <tbody>
   <?php 
       $sql = "SELECT * FROM users";
       $resultado = mysqli_query($strcon, $sql);
       while ($dados = mysqli_fetch_array($resultado)):
       ?>
        <tr>
               <input type="hidden" name="id" value="<?php echo $dados['id'];?>">
               <td ALIGN=MIDDLE WIDTH=60><?php echo $dados['nome'];?></td>
               <td ALIGN=MIDDLE WIDTH=60><?php echo $dados['email'];?></td>
               <input type="hidden" name="senha" value="<?php echo $dados['senha'];?>">
               <td ALIGN=MIDDLE WIDTH=20><a href="edUsuario.php?id=<?php echo $dados['id'];?>" ><i class="material-icons">edit</i></a></td>
               <td ALIGN=MIDDLE WIDTH=20><?php echo "<a href='delUser.php?id=" . $dados['id'] . "'><i class='material-icons'>remove</i></a>";?></td>
        </tr>
        <?php endwhile; ?>
   </tbody>
</table>
</div>
</body>
</html>