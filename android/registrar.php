<?php

$nombre=$_REQUEST["Nombre"];

$apellido=$_REQUEST["Apellido"];

$edad=$_REQUEST["Edad"];



try{
	$cnx=new PDO("mysql:host=localhost;dbname=proyectofinal",'root','');
	
	$query ="INSERT INTO usuarios(Nombre, Apellido, Edad) VALUES ('".$nombre."','".$apellido."','".$edad."')";

    //$result=mysql_query($query,$cnx);

   // echo $result;
	$res=$cnx->query($query);		

	$datos=array();
	if(!empty($res) && $res->rowCount() != 0){		
		$datos["id_rpta"] = "1"; //Guardaron los datos
	}else{
		$datos['all_info'] = "-1"; //Algo falló
	}
	echo json_encode($datos);
	
}catch(PDOException $e){	
	die($e->getmessage());
}
?>