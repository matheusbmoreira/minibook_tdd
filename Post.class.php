<?php
class Post {

	public $mensagem;
	public $idusuario;

	public function __construct($mensagem, $idusuario) {
		$this->mensagem = $mensagem;
		$this->idusuario = $idusuario;
	}

	public function getMessage() {
		return $this->mensagem;
	}

	public function getUsuario() {
		return $this->idusuario;
	}
}