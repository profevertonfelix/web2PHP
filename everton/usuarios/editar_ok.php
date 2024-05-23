<?php
	include_once "../class/usuarios.class.php";
	include_once "../class/usuariosDAO.class.php";
	
	$objUsuario = new usuarios();
	$objUsuario->setNome($_POST["nome"]);
	$objUsuario->setEmail($_POST["email"]);
	$objUsuario->setId($_POST["id"]);
	
	$objUsuarioDAO = new usuariosDAO();
	$retorno = $objUsuarioDAO->editar($objUsuario);
	if($retorno)
		echo "Editado com sucesso!";
	else
		echo "erro ao editar";
	
	
?>