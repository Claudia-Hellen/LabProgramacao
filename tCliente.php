<?php
include_once('conexao.php');
include_once('verifica_login.php');
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>SUMADEV - CLIENTES</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css"  href="css/style.css" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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

      <a href="cadCliente.php"><img src="imagens/add.png" id="addCliente"></a>

<div id="row">

    <h3 class="light"> Clientes Cadastrados </h3>
    
      <table id="clientescad">
        <thead>
          <tr>
               <th ALIGN=MIDDLE WIDTH=60>Nome:</th>
               <th ALIGN=MIDDLE WIDTH=60>Celular:</th>
               <th ALIGN=MIDDLE WIDTH=60>CPF:</th>
               <th ALIGN=MIDDLE WIDTH=120>Email:</th>
               <th colspan="2">Ações</th>
          </tr>
        </thead>

     <tbody>
     
     <?php 
       $sql = "SELECT * FROM clientes";
       $resultado = mysqli_query($strcon, $sql);
       while ($dados = mysqli_fetch_array($resultado)):
       ?>
          <tr>
               <input type="hidden" name="id" value="<?php echo $dados['id'];?>">
               <td ALIGN=MIDDLE WIDTH=60><?php echo $dados['nome'];?></td>
               <td ALIGN=MIDDLE WIDTH=60><?php echo $dados['celular'];?></td>
               <td ALIGN=MIDDLE WIDTH=60><?php echo $dados['cpf'];?></td>
               <td ALIGN=MIDDLE WIDTH=120><?php echo $dados['email'];?></td>
               <td ALIGN=MIDDLE WIDTH=20><a href="edCliente.php?id=<?php echo $dados['id'];?>" ><i class="material-icons">edit</i></a></td>
               <td ALIGN=MIDDLE WIDTH=20><?php echo "<a href='delCliente.php?id=" . $dados['id'] . "'><i class='material-icons'>remove</i></a>";?></td>
          </tr>
        
       <?php endwhile; ?>
     </tbody>
</table>
</div>
</body>
</html>