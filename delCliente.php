<?php
session_start();
require_once ('conexao.php');

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
if(!empty($id)){
	$result_cliente = "DELETE FROM clientes WHERE id='$id'";
	$resultado_cliente = mysqli_query($strcon, $result_cliente);
	if(mysqli_affected_rows($strcon)){
		$_SESSION['msg'] = "<p style='color:green;'>Usuário apagado com sucesso</p>";
		header("Location: tCliente.php");
	}else{
		
		$_SESSION['msg'] = "<p style='color:red;'>Erro o usuário não foi apagado com sucesso</p>";
		header("Location: tCliente.php");
	}
}else{	
	$_SESSION['msg'] = "<p style='color:red;'>Necessário selecionar um usuário</p>";
	header("Location: tCliente.php");
}

