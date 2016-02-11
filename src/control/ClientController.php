<?php

namespace contol;

use control\AbstractController;
use src\models\Prestation;


class ClientController extends AbstractController {
	
	public function afficherTout(){
		$presta = Prestation::all();
	}
	
}