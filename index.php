<?php
session_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>SUMADEV - LOGIN</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="sortcut icon" href="imagens/favicon.ico" type="image/x-icon" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<link rel="stylesheet" href="css/teste.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
    
        <img class="displayed" src="imagens/logo.png">
      
      
      <div class="container" >
      <?php
                    if(isset($_SESSION['nao_autenticado'])):
                    ?>
                    <div class="notification is-danger" >
                      <p>ERRO: Usuário ou senha inválidos.</p>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['nao_autenticado']);
                    ?>
      <a class="links" id="paralogin"></a>
       
      <div class="content">  
      <div id="Entrar">
      <!--action="conex/login.php"-->
        <form action="login.php" method="POST"> 
          <h1>Login</h1> 
          <p> 
            <label for="nome_login">Usuário</label>
            <input name="email" required="required" type="text" placeholder="ex.:sumare@edu.com.br"/>
          </p>
           
          <p> 
            <label for="userPassword">Senha</label>
            <input class="form-control ls-login-bg-password input-lg" name="senha" type="password" aria-label="Senha" placeholder="Senha">
          </p>
          
          <p> 
            <input type="submit" value="Entrar" /> 
          </p>
        </form>
      </div>
    </div>
</div>
</body>
</html>