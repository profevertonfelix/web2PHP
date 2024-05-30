<?php
	include_once "Produtos.class.php";
	class ProdutosDAO{
		public function __construct(){
			$this->conexao = 
			new PDO("mysql:host=localhost; dbname=web2bancophp", 
			"root", "");
		}
		
		
		public function inserir(Produtos $produto){
			$sql= $this->conexao->prepare(
			"INSERT INTO produtos (preco, nome, idcategorias) VALUES 
			(:preco, :nome, :idcategorias)");
			$sql->bindValue(":preco", $produto->getPreco());
			$sql->bindValue(":nome", $produto->getNome());
			$sql->bindValue(":idcategorias", $produto->getIdcategorias());
			return $sql->execute();
		}
		
		public function listar(){
			$sql = $this->conexao->prepare("
			SELECT produtos.*, categorias.nome as categoria FROM produtos
			INNER JOIN categorias ON produtos.idcategorias=categorias.idcategorias");
			$sql->execute();
			return $sql->fetchAll();
		}
	
	}
?>