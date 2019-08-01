<?php 

	$clave = $_POST['clave'];

	if($clave == '000')
	{
		echo "<p> Bienvenido </p>";
	}
	else
	{
		echo "<p> password incorrecto </p>";	
	}
 ?>