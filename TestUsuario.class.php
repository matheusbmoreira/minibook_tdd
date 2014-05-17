<?php
require_once('Usuario.class.php');
class TestUsuario extends PHPUnit_Framework_TestCase {
	public $Usuario;

	public function setUp(){
		$this->Usuario = new Usuario (1, 'matheus', 'teste');
	}
public function testGetIdusuario (){
	$this->assertEquals(1, $this->Usuario->getUsuario());  
}
public function testGetNomeusuario(){
	$this->assertEquals('matheus', $this->Usuario->getNome());
}
public function testGetSenha (){
	$this->assertEquals('teste', $this->Usuario->getSenha());
}	
}