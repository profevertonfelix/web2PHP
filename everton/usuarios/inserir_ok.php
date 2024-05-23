<?php
	include_once "../class/usuarios.class.php";
	include_once "../class/usuariosDAO.class.php";
	
	$objUsuario = new usuarios();
	$objUsuario->setNome($_POST["nome"]);
	$objUsuario->setEmail($_POST["email"]);
	$objUsuario->setSenha($_POST["senha"]);
	
	$nomeImagem = $_FILES["imagem"]["name"];
	$tmpName = $_FILES["imagem"]["tmp_name"];
	$diretorio = "imagens/".$nomeImagem;
	if(move_uploaded_file($tmpName, $diretorio))
		echo "imagem ok";
	else
		echo "erro imagem";
	$objUsuario->setImagem($nomeImagem);
	
	$objUsuarioDAO = new usuariosDAO();
	$retorno = $objUsuarioDAO->inserir($objUsuario);
	if($retorno)
		echo "cadastrado com sucesso!";
	else
		echo "erro ao cadastrar";
	
	
?>