<?php
class usuarios{
	private $id;
	private $nome;
	private $email;
	private $senha;
	private $imagem;
	
	public function getId(){
		return $this->id;
	}
	public function setId($value){
		$this->id=$value;
	}	
	public function getImagem(){
		return $this->imagem;
	}
	public function setImagem($value){
		$this->imagem=$value;
	}	
	public function getNome(){
		return $this->nome;
	}
	public function setNome($value){
		$this->nome=$value;
	}	
	public function getEmail(){
		return $this->email;
	}
	public function setEmail($value){
		$this->email=$value;
	}	
	public function getSenha(){
		return $this->senha;
	}
	public function setSenha($value){
		$this->senha=$value;
	}
}
?>