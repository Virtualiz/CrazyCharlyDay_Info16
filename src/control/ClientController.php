<?php

namespace control;

use control\AbstractController;
use models\Prestation;
use view\Catalogue;


class ClientController extends AbstractController {
	
	public function afficherTout()
	{

		$presta = Prestation::all();

		$vue = new Catalogue($presta);

		$vue->renderAll();


	}
	
}