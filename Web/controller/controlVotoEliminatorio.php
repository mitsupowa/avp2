<?php

	require_once '../../functions/BDconectar.php';

	ConectarBD();

    session_start();

	//Recogemos las variables que vienen por POST desde el formulario
	$nombreP = $_SESSION["name"];
	$pinchoelem =$_GET['pincho'];


	$a = "SELECT COUNT(*) FROM pincho_has_juradoprofesional where JuradoProfesional_TablaUsuarios_login='$nombreP' AND Pincho_idPincho='$pinchoelem'";

	$b=mysql_query($a)or die('No funciona'.mysql_error()); 

	if (mysql_result($b, 0)>0){

	$sql = "SELECT B.nombrePIN, B.fotoPIN, B.descripcionPIN, B.Participante_TablaUsuarios_login 
	FROM pincho_has_juradoprofesional A, pincho B 
	WHERE A.JuradoProfesional_TablaUsuarios_login='$nombreP' AND  A.Pincho_idPincho=B.idPincho AND A.Pincho_idPincho='$pinchoelem'";


	$result = mysql_query ($sql)or die('No funciona');
	

	// Listamos
	while ($row = mysql_fetch_row($result)){

	       echo '<tr><td>'.$row[0].'</td><td>'.$row[1].'</td><td>'.$row[2].'</td><td>'.$row[3].'</td></tr>';

	}
	}else{

		echo "<h2> Id mal selecionada </h2>";
	}


	  
?>