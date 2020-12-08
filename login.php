<?php
session_start();
include('conexao.php');

if(empty($_POST['email']) || empty($_POST['senha'])) {
	header('Location: index.php');
	exit();
}

$usuario = mysqli_real_escape_string($strcon, $_POST['email']);
$senha = mysqli_real_escape_string($strcon, $_POST['senha']);

$query = "SELECT id FROM users WHERE email = '$usuario' and senha = '$senha'";

$result = mysqli_query($strcon, $query);
 
$row = mysqli_num_rows($result);

if($row == 1) {
	$_SESSION['login'] = $usuario;
	header('Location: home.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: index.php');
	exit();
}