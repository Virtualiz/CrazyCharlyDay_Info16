<?php

namespace view;


use view\BasicView;


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
					
					';			
		}
					
					'<h1>Activité</h1>';
					
					'<h1>Restauration</h1>';
					
					'<h1>Hébergement</h1>';
				
				'</section>
				
				';

		

		echo $scrib;
		
	}
	
}