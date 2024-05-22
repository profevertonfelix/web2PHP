<?php
	include_once "usuarios.class.php";
	class usuariosDAO{
		public function __construct(){
			$this->conexao = new PDO(
				"mysql:host=localhost; dbname=web2bancophp",
				"root", ""
			);
		}
		public function inserir(usuarios $usuario){
			$sql = $this->conexao->prepare(
				"INSERT INTO usuarios (nome, email, senha) 
				VALUES
				(:nome, :email, :senha)"
			);
			$sql->bindValue(":nome", $usuario->getNome());
			$sql->bindValue(":email", $usuario->getEmail());
			$sql->bindValue(":senha", $usuario->getSenha());
			return $sql->execute();
		}
		
		public function listar(){
			$sql = $this->conexao->prepare(
			"SELECT * FROM usuarios"
			);
			$sql->execute();
			return $sql->fetchAll();
		}

		public function excluir($id){
			$sql = $this->conexao->prepare("
				DELETE FROM usuarios WHERE id = :id
			");
			$sql->bindValue(":id", $id);
			return $sql->execute();
		}
		
	}
?>