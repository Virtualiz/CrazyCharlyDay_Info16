<?php
/**
 * Created by PhpStorm.
 * User: Bruno
 * Date: 11/02/2016
 * Time: 10:09
 */

require_once 'vendor/autoload.php';

use Slim\Slim as Slim;
use \View\Catalogue;
use \View\Acceuil;


$app=new Slim();

$requette=$app->request;
$info=explode('/',$requette->getPathInfo());

/*$app->notFound(function() use($app) {

});*/


//---------------------/--------------------------------
$app->get('/', function(){
	$vue=new Acceuil();
	$vue->renderAll();
});

//---------------------/inscription---------------------
$app->get('/catalogue', function(){
	$vue=new Catalogue();
	$vue->renderAll();
});



$app->run();