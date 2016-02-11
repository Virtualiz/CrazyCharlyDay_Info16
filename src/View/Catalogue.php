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
				
					<h1>Attention</h1>
				
						<form><fieldset>';
		
		foreach ($this->tab as  $val){
			if($val["type"]==1){
				$scrib.='		<input type="checkbox" id="fjf1" value="'.$val["id"].'">'.$val["nom"].'</input>';		
			}
		}
					
					$scrib.='
						</fieldset></form>
					<h1>Activité</h1>
						<form><fieldset>';
					
		foreach ( $this->tab as $val ) {
			if ($val ["type"] == 2) {
				$scrib .= '		<input type="checkbox" id="fjf1" value="'.$val["id"].'">' . $val ["nom"] . '</input>';
			}
		}
					
					$scrib.='
						</fieldset></form>
					<h1>Restauration</h1>
						<form><fieldset>';
					
		foreach ( $this->tab as $val ) {
			if ($val ["type"] == 3) {
				$scrib .= '		<input type="checkbox" id="fjf1" value="'.$val["id"].'">' . $val ["nom"] . '</input>';
			}
		}
					
					$scrib.='
						</fieldset></form>
					<h1>Hébergement</h1>
						<form><fieldset>';
					
		foreach ( $this->tab as $val ) {
			if ($val ["type"] == 4) {
				$scrib .= '		<input type="checkbox" id="fjf1" value="'.$val["id"].'">' . $val ["nom"] . '</input>';
			}
		}
				
				$scrib.='</fieldset></form></section>';

		

		echo $scrib;
		
	}
	
}