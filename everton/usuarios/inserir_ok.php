<?php
	include_once "../class/usuarios.class.php";
	include_once "../class/usuariosDAO.class.php";
	
	$objUsuario = new usuarios();
	$objUsuario->setNome($_POST["nome"]);
	$objUsuario->setEmail($_POST["email"]);
	$objUsuario->setSenha($_POST["senha"]);
	
	$objUsuarioDAO = new usuariosDAO();
	$retorno = $objUsuarioDAO->inserir($objUsuario);
	if($retorno)
		echo "cadastrado com sucesso!";
	else
		echo "erro ao cadastrar";
	
	
?>