<?php 
	
	function oficinaADD($f3, $params)
	{
		$db=conection();
		$idOficina=createIDOficina($f3, $params);
		$db->exec('INSERT INTO `oficinas` (`idOficina`) 
			VALUES (:idOficina)',
			array(
				':idOficina' => $idOficina			
			)
		);
		$Columnas = consulta("SHOW COLUMNS FROM oficinas");

		for ($i=1; $i < count($Columnas); $i++) 
		{ 
			echo "<br>";
			echo $f3->get("POST.{$Columnas[$i]['Field']}");
			$db->exec("UPDATE oficinas SET oficinas.{$Columnas[$i]["Field"]}=:INFO
				WHERE (oficinas.idOficina = :idOficina)",
				array(
					':INFO'=>$f3->get("POST.{$Columnas[$i]['Field']}"),
					':idOficina'=>$idOficina
				)
			); 
		}

	}

	function oficinaREMOVE($f3, $params){

	}

	function oficnaUPDATE($f3, $params){

	}

	function createIDOficina($f3, $params)
	{
		$timestamp = strtotime('Y');
	    $anio = idate('Y', $timestamp);
		$numero = count(consulta("SELECT * FROM `oficinas` WHERE 1"))+1;
	    $idnext = str_pad($numero, 4, '0', STR_PAD_LEFT);
	    echo  $anio.$numero.$idnext;
	    return $anio.$numero.$idnext;
	}


?>