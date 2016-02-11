<?php

namespace view;


use View\BasicView;


class Catalogue extends BasicView{
	
	protected $tab;
	public function __construct($prestations){
		parent::__construct();
		$this->tab=$prestations;
	}
	

	function render($indice)
	{


		$root = \Slim\Slim::getInstance()->request->getRootUri();
		$app = \Slim\Slim::getInstance();

		$scrib = '<link href="../css/bootstrap.min.css" rel="stylesheet"><link href="../css/starter-template.css" rel="stylesheet"><div class="container"><div class="starter-template">';

		if ($indice == '1') {


			foreach ($this->tab as $prestation) {
				$scrib .= "
			<section class='row'>
			<div class='col-lg-12 thumbnail'>
			<div><h1>" . $prestation->nom . "</h1></div>
				<div class='col-lg-6'>
					<div class='col-lg-12'><p>" . $prestation->descr . "</p></div>
					<div class='col-lg-12'><p> Prix : " . $prestation->prix . " €</p></div>
					<div class='col-lg-12'><a class='btn btn-primary' href='#'>Ajouter à la pochette</a></div>
				</div>
				<div class='col-lg-6'><img src='../doc/img/" . $prestation->img . "' height='300'></div></div>
			</section>
			";
			}
		}
		$scrib .= '</div></div>';

		echo $scrib;
	}
}