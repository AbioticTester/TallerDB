<?php 

function seguroADD($f3, $params)
{
	$db=conection();
	$idseguro=createIDSeguro($f3, $params);
	$db->exec('INSERT INTO `seguro` (`idSeguro`) 
		VALUES (:idSeguro)',
		array(
			':idSeguro' => $idseguro			
		)
	);
	$Columnas = consulta("SHOW COLUMNS FROM seguro");

	for ($i=1; $i < count($Columnas); $i++) 
	{ 
		echo "<br>";
		echo $f3->get("POST.{$Columnas[$i]['Field']}");
		$db->exec("UPDATE seguro SET seguro.{$Columnas[$i]["Field"]}=:INFO
			WHERE (seguro.idSeguro = :idSeguro)",
			array(
				':INFO'=>$f3->get("POST.{$Columnas[$i]['Field']}"),
				':idSeguro'=> $idseguro
			)
		); 
	}

}

function seguroREMOVE($f3, $params){

}

function seguroPDATE($f3, $params){

}
function createIDSeguro($f3, $params)
{
	$timestamp = strtotime('Y');
	$anio = idate('Y', $timestamp);
	$numero = count(consulta("SELECT * FROM `seguro` WHERE 1"))+1;
	$idnext = str_pad($numero, 4, '0', STR_PAD_LEFT);
	echo  $anio.$numero.$idnext;
	return $anio.$numero.$idnext;
}

?>