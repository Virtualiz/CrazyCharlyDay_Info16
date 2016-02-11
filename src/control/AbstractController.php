<?php

namespace control;

use Illuminate\Database\Capsule\Manager as DB;


abstract class AbstractController {

	private $requete;
	
	
	
	public function __construct($http) {
		$this->requete=$http;
		$db = new DB();
		$filename='/../conf/db.ccd.conf.ini';
		$db->addConnection(parse_ini_file($filename));
		$db->setAsGlobal();
		$db->bootEloquent();
	}
	
}