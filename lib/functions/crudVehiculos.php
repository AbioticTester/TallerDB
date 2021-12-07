<?php 
	
	function vehiculoADD($f3, $params)
	{
		$db=conection();
		$db->exec('INSERT INTO `automovil` (`matriculaAuto`,`disponibleAuto`,`idSeguro`) 
			VALUES (:matriculaAuto,:disponibleAuto,:idSeguro)',
			array(
				':matriculaAuto' => $f3->get("POST.matriculaAuto"),
				':disponibleAuto' => 1,
				':idSeguro'=>$f3->get("POST.idSeguro")			
			)
		);
		$Columnas = consulta("SHOW COLUMNS FROM automovil");

		for ($i=1; $i < count($Columnas)-2; $i++) 
		{ 
			echo "<br>";
			echo $f3->get("POST.{$Columnas[$i]['Field']}");
			$db->exec("UPDATE automovil SET automovil.{$Columnas[$i]["Field"]}=:INFO
				WHERE (automovil.matriculaAuto = :matriculaAuto)",
				array(
					':INFO'=>$f3->get("POST.{$Columnas[$i]['Field']}"),
					':matriculaAuto'=>$f3->get("POST.matriculaAuto")
				)
			); 
		}

	}

	function vehiculoREMOVE($f3, $params){

	}

	function vehiculoPDATE($f3, $params){

	}


?>