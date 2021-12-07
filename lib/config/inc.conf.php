<?php 

//Autor: Hugo Eduardo Zetina Gutierrez
setlocale(LC_ALL,"es_ES");

require_once('lib/base.php');
require_once('lib/middleware.php');

$f3 = \Base::instance();																//Fatfree instancias
$middleware = \Middleware::instance();													//middleware instancia

$f3->config('config.ini');    															//Fatfree configuraciones
$f3->set('AUTOLOAD', 'app/');
$f3->set('LOCALES','app/dict/');														//Idiomas
$f3->set('FALLBACK','es');																//Idioma por defecto
function conection(){
	$host = "localhost";
	$puerto = "3306";
	$baseDatos = "id17555500_family_db1";
	$usuario = "id17555500_admin";
	$contrasena = "DataBaseSeg777#";
	$db=new \DB\SQL('mysql:host='.$host.';port='.$puerto.';dbname='.$baseDatos,$usuario,$contrasena);
	return $db;
}
function consulta($consulta)
{
	$db = conection();
	$consultar =$db->exec($consulta);   
	return $consultar;  
}

function view($ruta,$vistas)                                          
{
	
	echo \Template::instance()->render($ruta.'header.htm');
	for($minimo=0;$minimo<count($vistas);$minimo++)
		echo \Template::instance()->render($ruta.$vistas[$minimo].'.htm');

	echo \Template::instance()->render($ruta.'footer.htm');
		
}


?>