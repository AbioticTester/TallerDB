<?php
//Autor: Hugo Eduardo Zetina Gutierrez

namespace Controller;
use Respect\Validation\Validator as v;
class Login{

	/************************
    *                       *
    *  Login 		 		*
    *                       *
    ************************/

	function Login_view(\Base $f3, $params){
		$f3->set("error","");
		$ruta="/login/";
		$Template=["navbar","seccion1", "modal"];
		view($ruta,$Template);
	}

	function Acceso_LogIn(\Base $f3, $params) {
		$db = conection();																					//Conexión db

		$token=sha1(md5(srand()+time()));																	//Token de sesión

		$user = new \DB\SQL\Mapper($db, 'login');
		$auth = new \Auth($user, array('id'=>'nombreUsuario', 'pw'=>'passwordEncryptedUsuario'));
		$usser=strtoupper($f3->get('POST.usuario'));

		$login_result = $auth->login($usser,sha1(md5($f3->get('POST.contrasena'))) ); 						//Validación de existencia de Usuario en DB

		if($login_result){																					//existencia
			
			$datosSesion = $db->exec("SELECT * FROM `login` WHERE `nombreUsuario` = :usuario limit 1",
				array(
					':usuario'=> $usser
				)
			);
			/*		Datos de sesion 	*/
			$f3->set("SESSION.USUARIO", $usser);
			
			$f3->set("SESSION.ROL", $datosSesion[0]["rolUsuario"]);	

			reroutesession($f3,$params);																//Reruteo a la página correspondiente
																									
		}else{
			/*	Usuario o contraseña inválidos	*/
			$f3->set("error","Usuario o contraseña incorrecto.");
			$ruta="/login/";
			$template=["navbar","seccion1", "modal"];
			view($ruta,$template);
		}
	}

	function Acceso_LogOut(\Base $f3, $params) {
		$f3->clear('SESSION');
		$f3->reroute("@Login");
	}

}