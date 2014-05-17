<?php
require_once('Post.class.php');
class TestPost extends PHPUnit_Framework_TestCase {

	public $Post;
	
	public function setUp() {
		$this->Post = new Post('teste', 1);
	}
	
	public function testGetMessage() {
		$this->assertEquals('teste', $this->Post->getMessage());
	}

	public function testGetIdusario(){
		$this->assertEquals(1, $this->Post->getUsuario());
	}
}