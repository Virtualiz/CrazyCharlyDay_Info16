<?php

namespace View;

class Acceuil extends BasicView{
	
	public function __construct(){
		parent::__construct();
	}
	
	
	function render($indice){
		
		$root = \Slim\Slim::getInstance()->request->getRootUri();
		$app= \Slim\Slim::getInstance();
		$scrib='
				<div class="container">

      			<div class="starter-template">
      			<h1>Accueil</h1>
				<section class="lead">



					<p>Bonjour et bien venu sur le site de la fête. Ici vous trouverez tout ce dont vous avez besoin pour 
				organiser vos soirées, réunions entre amis, anversaires et enterrements de vie de jeune fille/garçon.</p>

					<p>Pour organiser vos soirées, dirigez-vous vers l\'onglet "Catalogue", de là vous pourrez faire vos choix
				dans une liste variée de prestations. Après avoir valider vos choix, un lien vous sera fourni pour que vous et 
				vos amis piussiez vous cotiser pour cet événement.</p>

				</section>
				</div>
				</div>';
		
		echo $scrib;

	}

}