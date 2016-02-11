<?php

namespace control;

abstract class AbstractController {

	private $requete;
	
	
	public function __construct($http) {
		$this->requete=$http;
	
	}
	
}