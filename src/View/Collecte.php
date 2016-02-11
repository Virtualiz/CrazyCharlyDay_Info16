<?php

namespace View;

class Collecte extends BasicView{
	
	
	public function __construct(){
		
	}
	
	function render($indice){
		
		$root = \Slim\Slim::getInstance()->request->getRootUri();
		$app= \Slim\Slim::getInstance();
		
		$scrib='<section>
					<p>Vous etes sur la page de dons pour une pochette.
					Veuillez entrer la somme que vous voulez donner.</p><br>
				
					<form action="'.$root.'collecte_sub" method="post">
						Somme que vous voulez donner :<br>
						<input type="number" min ="1" value="5" step="1" name="don"><br>
						<input type="submit" value="Submit">
					</form>
				</section>
				';
		
	}
	
}