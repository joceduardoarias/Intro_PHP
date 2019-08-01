<pre>
<?php 

	$name = 
	array
	(
		'Aspen',
		'Lenovo',
		'Accer',
		'HP',
		'Compaq' 
	);
	//mostrar valores
	var_dump($name);
	echo $name[1];
	
	$diaSemana = array
	(
		'Domingo',
		'Lunes',
		'Martes',
		'Miercoles',
		'Jueves',
		'Viernes',
		'Sabado' 
	);
	
	//metodos para trabajar con fecha date()
	
	$n = date('w');
	echo "<p> fecha </p>";
	echo $diaSemana[$n],' ', date('d');
	
 ?>
 </pre>