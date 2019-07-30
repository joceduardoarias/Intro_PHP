<ul>
<?php 
$n = 1;
while ( $n < 15) {
	# code...
	echo '<li>', "Hola ",$n, '<br>','</li>';

	$n++;
}

$alemanes = array
(
	'BMW',
	'Audi',
	'Mercedes Benz',
	'Opel' 
);

$contador = 0;
$cantidad = count($alemanes);
while ( $contador < $cantidad) // si le digo <= lanza un error pues entra la ultima iteracion y esta vacio el array  
{
	# code...
	echo '<li>',$alemanes[$contador], '<br>','</li>'; //NUNCA VARIABLES DENTRO DE LA COMILLAS
	$contador++;
}
 ?>
 </ul>
 <!--STROM IDE -->
 <!-- Actividad 
  leer formularios texbox,listbox,button,box -->
