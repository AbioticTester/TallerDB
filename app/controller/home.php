<?php
//Autor: Hugo Eduardo Zetina Gutierrez

namespace Controller;
use Respect\Validation\Validator as v;
class Home{

	/************************
    *                       *
    *  Home 		 		*
    *                       *
    ************************/

	function Home_Admin(\Base $f3, $params) {
		if(!$f3->get("SESSION")){
			$f3->reroute("@LogOut");
		}
		else{
			if($f3->get("SESSION.ROL")==1){
				$f3->set("oficinas",consulta("SELECT * FROM oficinas WHERE 1"));
				$f3->set("automovil",consulta("SELECT * FROM `automovil` LEFT JOIN seguro ON seguro.idSeguro=automovil.idSeguro"));
				$f3->set("seguro",consulta("SELECT * FROM seguro WHERE 1"));
				$f3->set("seguroccount",count(consulta("SELECT * FROM seguro WHERE 1")));
				$f3->set("Usuarios",consulta("SELECT idUsuario, nombreUsuario, rolUsuario FROM login WHERE 1"));
				$ruta="/administrador/";
				$Template=["navbar","main", "modal"];
				view($ruta,$Template);
			}else{
				reroutesession($f3,$params);

			}
		}
	}

	function Home_User(\Base $f3, $params) {
		if(!$f3->get("SESSION")){
			$f3->reroute("@LogOut");
		}
		else{
			if($f3->get("SESSION.ROL")==0){
				$f3->set("vendedor",consulta("SELECT * FROM vendedor WHERE 1"));
				$f3->set("cliente",consulta("SELECT * FROM cliente WHERE 1"));
				$f3->set("oficinas",consulta("SELECT * FROM oficinas WHERE 1"));
				$f3->set("renta",consulta("SELECT * FROM renta WHERE 1 ORDER BY folioRenta DESC"));
				$f3->set("automovil",consulta("SELECT * FROM `automovil` LEFT JOIN seguro ON seguro.idSeguro=automovil.idSeguro"));
				$f3->set("Usuarios",consulta("SELECT idUsuario, nombreUsuario, rolUsuario FROM login WHERE 1"));
				$ruta="/home/";
				$Template=["navbar","seccion1", "modal"];
				view($ruta,$Template);
			}else{
				reroutesession($f3,$params);

			}
		}
	}

	function Add_Rent(\Base $f3, $params) 
	{
		$db=conection();
		$existencia=consulta("SELECT * FROM cliente WHERE rfcCliente='{$f3->get("POST.rfcCliente")}'");
		echo count($existencia);

		if(count($existencia)==0)
		{
			
			$db->exec('INSERT INTO `cliente` (`rfcCliente`) 
				VALUES (:rfcCliente)',
				array(
					':rfcCliente'=> $f3->get("POST.rfcCliente")
				));
			
		}

		$Columnas = consulta("SHOW COLUMNS FROM cliente");

		for ($i=1; $i < count($Columnas); $i++) 
		{ 
			$db->exec("UPDATE cliente SET cliente.{$Columnas[$i]["Field"]}=:INFO
				WHERE (cliente.rfcCliente = :rfcCliente)",
				array(
					':INFO'=>$f3->get("POST.{$Columnas[$i]['Field']}"),
					':rfcCliente'=>$f3->get("POST.rfcCliente")
				)
			); 
		}

		/*Generación de folio*/
		$timestamp = strtotime('Y');
		$anio = idate('Y', $timestamp);
		$nombreComercial = $f3->GET("POST.idOficina");
		$numero = count(consulta("SELECT * FROM `renta` WHERE 1"))+1;
		$idnext = str_pad($numero, 4, '0', STR_PAD_LEFT);
		$folioRenta=$anio.$nombreComercial[0].$nombreComercial[1].$nombreComercial[2].$idnext;
		/**/
		echo "<br>Folio renta: ";
		echo $folioRenta;

		$rfc=consulta("SELECT * FROM vendedor WHERE nombreUsuario='{$f3->get("SESSION.USUARIO")}'");
		$aseguranza=consulta("SELECT * FROM `automovil` LEFT JOIN seguro ON seguro.idSeguro=automovil.idSeguro WHERE automovil.matriculaAuto='{$f3->get("POST.matriculaAuto")}'");
		
		echo "<br> RFC vendedor";
		echo $rfc[0]["rfcVendedor"];
		echo "<br>";

		echo '$'.$aseguranza[0]["tarifaSeguro"]*$f3->get("POST.diasRenta");

		$db->exec('INSERT INTO renta (`folioRenta`, `rfcVendedor`, `matriculaAuto`, `rfcCliente`, `idOficina`, `fechaRenta`, `diasRenta`, `importeRenta`, `statusRenta`) 
			VALUES (:folioRenta, :rfcVendedor, :matriculaAuto, :rfcCliente, :idOficina, :fechaRenta, :diasRenta, :importeRenta, :statusRenta)',
			array(
				':folioRenta' => $folioRenta,
				':rfcVendedor' => $rfc[0]["rfcVendedor"],
				':matriculaAuto'=>$f3->get("POST.matriculaAuto"),			
				':rfcCliente'=>$f3->get("POST.rfcCliente"),			
				':idOficina'=>$f3->get("POST.idOficina"),		
				':fechaRenta'=>Date('Y-m-d H:m'),			
				':diasRenta'=>$f3->get("POST.diasRenta"),			
				':importeRenta'=>$aseguranza[0]["tarifaSeguro"]*$f3->get("POST.diasRenta"),	
				':statusRenta'=>"RENTADO"
			)
		);

		$db->exec("UPDATE automovil SET automovil.disponibleAuto=:INFO
			WHERE (automovil.matriculaAuto = :matriculaAuto)",
			array(
				':INFO'=>0,
				':matriculaAuto'=>$f3->get("POST.matriculaAuto")
			)
		); 


		$f3->reroute("@HomeUser");
	}
	function Return_Rent(\Base $f3, $params) 
	{
		$db=conection();
		$db->exec("UPDATE renta SET renta.statusRenta=:INFO
			WHERE (renta.folioRenta = :folioRenta)",
			array(
				':INFO'=>"FINALIZADO",
				':folioRenta'=>$f3->get("POST.folioRenta")
			)
		); 

		$db->exec("UPDATE automovil SET automovil.disponibleAuto=:INFO
			WHERE (automovil.matriculaAuto = :matriculaAuto)",
			array(
				':INFO'=>1,
				':matriculaAuto'=>$f3->get("POST.matriculaAuto")
			)
		); 
		$f3->reroute("@HomeUser");

	}


	function Add_User(\Base $f3, $params) {
		$db=conection();
		$contrasena=$f3->get("POST.contrasena");

		
		$db->exec('INSERT INTO `login` (`nombreUsuario`, `passwordEncryptedUsuario`, `rolUsuario`) 
			VALUES (:nombreUsuario, :passwordEncryptedUsuario, :rolUsuario)',
			array(
				':nombreUsuario'=> $f3->get("POST.nombreUsuario"),
				':passwordEncryptedUsuario'=> sha1(md5($contrasena)),
				':rolUsuario'=> $f3->get("POST.rol")
			));

		$db->exec('INSERT INTO `vendedor` (`nombreUsuario`,`rfcVendedor`,`idOficina`) 
			VALUES (:nombreUsuario,:rfcVendedor,:idOficina)',
			array(
				':nombreUsuario'=> $f3->get("POST.nombreUsuario"),
				':rfcVendedor'=> $f3->get("POST.rfcVendedor"),
				':idOficina'=> $f3->get("POST.idOficina")
			));

		$Columnas = consulta("SHOW COLUMNS FROM vendedor");

		for ($i=2; $i < count($Columnas)-1; $i++) 
		{ 
			
			$db->exec("UPDATE vendedor SET vendedor.{$Columnas[$i]["Field"]}=:INFO
				WHERE (vendedor.rfcVendedor = :rfcVendedor)",
				array(
					':INFO'=>$f3->get("POST.{$Columnas[$i]['Field']}"),
					':rfcVendedor'=>$f3->get("POST.rfcVendedor")
				)
			); 
		}

		$f3->reroute("@HomeUser");
	}

	function Update_User(\Base $f3, $params) {

		$existencia=consulta("SELECT idUsuario FROM login WHERE idUsuario='{$f3->get("POST.idUsuario")}'");

		if(count($existencia)!=0){

			consulta("UPDATE `login` SET `nombreUsuario` = '{$f3->get("POST.nombreUsuario")}', `rolUsuario` = '{$f3->get("POST.rol")}' WHERE idUsuario = '{$f3->get("POST.idUsuario")}'");

			echo $f3->get("POST.rol");
		}else{
			echo "No se encontró usuario a modificar";
		}
		$f3->reroute("@HomeAdmin");
	}

	function Remove_User(\Base $f3, $params) {
		consulta("DELETE FROM `login` WHERE login.idUsuario = '{$f3->GET("POST.idUsuario")}'");
		$f3->reroute("@HomeAdmin");
		
	}

	function Add_Oficina(\Base $f3, $params) {
		oficinaADD($f3, $params);
		$f3->reroute("@HomeAdmin");

	}

	function Add_Vehiculo(\Base $f3, $params) {
		vehiculoADD($f3, $params);
		$f3->reroute("@HomeAdmin");
	}

	function Add_Seguro(\Base $f3, $params) {
		seguroADD($f3, $params);
		$f3->reroute("@HomeAdmin");

	}

}