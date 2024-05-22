<?php
	include_once "../class/usuarios.class.php";
	include_once "../class/usuariosDAO.class.php";
	
	$id = $_GET['id'];
	$objUsuariosDAO = new usuariosDAO();
	$retorno = $objUsuariosDAO->excluir($id);
	
	if($retorno)
		header("location:listar.php?excluirOk");
	else
		header("location:listar.php?excluirError");
?>