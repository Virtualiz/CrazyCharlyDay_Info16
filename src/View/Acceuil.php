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



					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ultrices et ipsum quis tincidunt.
				Fusce sagittis risus ex, in consectetur ex tempor at. Morbi sit amet lectus sed ipsum efficitur hendrerit.
				Etiam et pellentesque nulla. Proin ut accumsan purus. Phasellus ullamcorper consequat augue, nec mollis orci
				ultricies at. Cras hendrerit massa eget ligula viverra vehicula euismod eu est.</p>

					<p>Phasellus vitae dapibus lectus. Nullam dictum felis mi, non dapibus lorem placerat ac. Suspendisse sed
				sollicitudin nibh. Suspendisse rhoncus ullamcorper felis, a semper nunc. Quisque lorem tortor, congue ac
				tincidunt vitae, tempor quis nunc. Cras id auctor libero. Morbi sit amet molestie purus. Interdum et malesuada
				 fames ac ante ipsum primis in faucibus. Vivamus tempus nibh sit amet diam tempor, vitae venenatis ex sagittis.
				Curabitur nec dignissim sem. Morbi vel ornare justo.</p>

					<p>Donec varius scelerisque lorem in accumsan. Donec in dolor eget eros scelerisque laoreet a at lacus.
				Quisque turpis felis, eleifend eget semper at, congue ac eros. Aliquam iaculis mauris interdum tortor mattis,
				et malesuada sapien pretium. Duis pulvinar nibh vitae pharetra sagittis. Nunc malesuada erat vitae dui feugiat,
				vitae finibus purus pulvinar. In eget suscipit tortor. Morbi mattis urna turpis, nec varius dui malesuada sit amet.
				Pellentesque porta, lorem et egestas tristique, leo tellus ultrices mi, efficitur maximus diam lectus a lacus.
				Maecenas in tristique tellus, sed feugiat erat. Nullam arcu tortor, blandit a justo sed, finibus convallis tellus.
				Phasellus ullamcorper lacinia massa, non ultrices odio. Praesent venenatis diam non metus congue viverra. Sed id
				ultricies arcu. Vestibulum augue nisl, eleifend ut neque sed, consectetur lobortis lacus. Sed euismod nisl in risus
				convallis volutpat.</p>

					<p>Etiam ac erat lacus. Sed pretium quam ut diam accumsan commodo. Praesent vulputate pretium vestibulum. Proin
				scelerisque feugiat ligula, a luctus lorem volutpat non. In venenatis a mauris vel malesuada. Integer condimentum
				viverra auctor. Phasellus vitae neque ut tellus fringilla vulputate.<p>

					<p>Nullam varius turpis at risus tincidunt, at rutrum nibh convallis. Proin porta nisl dui, et maximus lorem condimentum
				id. Nulla ac laoreet quam, nec euismod magna. Integer tristique rhoncus porttitor. Curabitur viverra, orci quis sagittis
				volutpat, nisl felis ultrices nisl, sed pulvinar urna augue nec massa. Curabitur quis dui facilisis, tristique magna quis,
				sagittis enim. Nulla commodo accumsan ultrices. Nam ultrices fermentum congue. Nam commodo tincidunt purus, ut bibendum magna
				volutpat ut. Integer vel turpis efficitur, molestie nisi eget, varius velit. Lorem ipsum dolor sit amet, consectetur adipiscing
				elit. Nulla facilisi. Integer diam libero, auctor vel ex ultricies, suscipit ornare quam. Donec odio enim, tempor eget quam
				eget, posuere finibus ex. Quisque sem lacus, pretium ut tempor non, interdum fermentum est. Pellentesque nec elementum arcu,
				eu auctor libero.</p>

				</section>
				</div>
				</div>';
		
		echo $scrib;

	}

}