<?php
	include_once "../class/usuarios.class.php";
	include_once "../class/usuariosDAO.class.php";
	
	$objUsuario = new usuarios();
	$objUsuario->setSenha($_POST["senha"]);
	$objUsuario->setEmail($_POST["email"]);
	
	$objUsuarioDAO = new usuariosDAO();
	$retorno = $objUsuarioDAO->login($objUsuario);
	if($retorno == 0){
		header("location:login.php?erroEmail");
	}
	else if($retorno == 1){
		header("location:login.php?erroSenha");
	}
	else{
		session_start();
		$_SESSION['idUsuario'] = $retorno["id"];
		$_SESSION['logado'] = true;
		$_SESSION['nomeUsuario'] = $retorno["nome"];
		header("location:listar.php");
	}
?>