<?php
class Usuario {

	public $idusuario;
	public $nomeusuario;
	public $senha;

	public function __construct($idusuario, $nomeusuario, $senha){
		$this->idusuario = $idusuario;
		$this->nomeusuario = $nomeusuario;
		$this->senha = $senha;
	}
	public function getUsuario(){
		return $this->idusuario;
	}
	public function getNome(){
		return $this->nomeusuario;
	}
	public function getSenha(){
		return $this->senha;
	}

}