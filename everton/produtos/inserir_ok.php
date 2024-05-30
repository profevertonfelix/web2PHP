<?php
	include_once "../class/Produtos.class.php";
	include_once "../class/ProdutosDAO.class.php";
	
	$objProdutos = new Produtos();
	$objProdutos->setNome($_POST["nome"]);
	$objProdutos->setPreco($_POST["preco"]);
	$objProdutos->setIdCategorias($_POST["idcategorias"]);
	
		
	$objProdutosDAO = new ProdutosDAO();
	$retorno = $objProdutosDAO->inserir($objProdutos);
	if($retorno)
		echo "cadastrado com sucesso!";
	else
		echo "erro ao cadastrar";
	
	
?>