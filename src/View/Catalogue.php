<?php

namespace View;

class Catalogue extends BasicView{
	
	protected $tab;
	public function __construct($prestations){
		parent::__construct();
		$this->tab=$prestations;
	}
	

	function render($indice){

		
		$root = \Slim\Slim::getInstance()->request->getRootUri();
		$app= \Slim\Slim::getInstance();
		
		$scrib='
				<section>
				
					<h1>Attention</h1>';
		
		foreach ($this->tab as $val){
			$scrib+='
					<form>
						<fieldset>
							<input type="check" id="fjf1">'.$val->nom.'</input>
						</fieldset>
					</form>
					';			
		}
					
					$scrib+='<h1>Activité</h1>';
					
					$scrib+='<h1>Restauration</h1>';
					
					$scrib+='<h1>Hébergement</h1>';
				
				$scrib+='</section>';

		

		echo $scrib;
		
	}
	
}