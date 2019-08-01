<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ProcesaDatos</title>
</head>
<body>
	<!-- para que esta pagina web dinamica funcione debe estar ejecutada desde el servidor
		  -->
	<?php	
	//$_POST  o $_GET todo lo que envio un formulario con el metodo del formulario
	$nombre = $_GET['nombre'];//este es el name del formulario
	$address = $_GET['email'];
		echo "Tu nombre es:  " . $nombre;
		echo "<br>";
		echo "Su direccion email es: " .$address;
	?>
</body>
</html>
<!-- consultar filter_var -->
