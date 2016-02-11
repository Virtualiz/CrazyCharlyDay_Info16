<?php

namespace View;

use src\view\BasicView;

class Catalogue extends BasicViewView{

	$root = \Slim\Slim::getInstance()->request->getRootUri();
	$app= \Slim\Slim::getInstance();
	
	public function __construct(){
	
	}
	
	function render(){

		$root = \Slim\Slim::getInstance()->request->getRootUri();
		$app= \Slim\Slim::getInstance();
		$scrib='';

	}

}