<?php

namespace View;

use src\view\BasicView;

class Catalogue extends BasicView{
	
	$root = \Slim\Slim::getInstance()->request->getRootUri();
	$app= \Slim\Slim::getInstance();
	
	public function __construct(){
		
	}
	
	function render(){
		
		
		$scrib='';
		
	}
	
}