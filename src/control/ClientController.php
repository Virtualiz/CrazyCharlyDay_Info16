<?php

namespace control;

use models\Prestation;
use view\Catalogue;


class ClientController extends AbstractController {
	
	public function afficherTout()
	{
		$presta = Prestation::all()->toArray();
		return $presta;
	}
	
}