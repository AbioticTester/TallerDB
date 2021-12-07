<?php 
//Autor: Hugo Eduardo Zetina Gutierrez

/*
	Contenido de configuración
*/
function reroutesession($f3,$params){

	switch ($f3->get("SESSION.ROL")) {
		case '0':
			$f3->reroute("@HomeUser");										//Reruteo a la página correspondiente
		break;
		case '1':
			$f3->reroute("@HomeAdmin");										//Reruteo a la página correspondiente
		break;
			
		default:
			// code...
		break;
	}
}


?>