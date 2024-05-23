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
				"INSERT INTO usuarios (nome, email, senha, imagem) 
				VALUES
				(:nome, :email, :senha, :imagem)"
			);
			$sql->bindValue(":nome", $usuario->getNome());
			$sql->bindValue(":email", $usuario->getEmail());
			$sql->bindValue(":senha", $usuario->getSenha());
			$sql->bindValue(":imagem", $usuario->getImagem());
			return $sql->execute();
		}
		
		public function listar(){
			$sql = $this->conexao->prepare(
			"SELECT * FROM usuarios"
			);
			$sql->execute();
			return $sql->fetchAll();
		}
		
	
		public function listarUm($id){
			$sql = $this->conexao->prepare(
			"SELECT * FROM usuarios WHERE id=:id"
			);
			$sql->bindValue(":id", $id);
			$sql->execute();
			return $sql->fetch();
		}
		public function login(usuarios $usuario){
			$sql = $this->conexao->prepare(
				"SELECT * FROM usuarios WHERE email=:email"
			);
			$sql->bindValue(":email", $usuario->getEmail());
			$sql->execute();
			if($sql->rowCount()>0){
				while($retorno = $sql->fetch()){
					if($retorno["senha"] == $usuario->getSenha()){
						return $retorno;
					}
				}
				return 1;//erro senha;
							}
			else{
				return 0;//email nao cadastrado
			}
		}
		
		public function editar(usuarios $usuario){
			$sql = $this->conexao->prepare("UPDATE usuarios SET
			nome=:nome, email=:email
			WHERE id=:id");
			$sql->bindValue(":nome", $usuario->getNome());
			$sql->bindValue(":email", $usuario->getEmail());
			$sql->bindValue(":id", $usuario->getId());
			return $sql->execute();
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