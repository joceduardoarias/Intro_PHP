<pre>
<?php
//establecer conexion de php con el servidor de base de datos
//PASO 1: establecer la conexion con el server yelijo la tabla
$link = mysqli_connect
(
    'localhost', //hots
    'root',//user
    '',//password
    'catalogo'//database
);

//PASO 2: Realizo las consultas
$sql = "SELECT idMarca,mkNombre FROM marcas";
//PASO 3: ejecutar consultas
$marca= mysqli_query($link,$sql); // parametro 1: nombre base datos, param 2: la consulta
                                  //retorna : objetos de tipo mysqli_result (puede ser un objeto, o un booleano)
//PASO 4: reportar informes
$fila = mysqli_fetch_array($marca);// fetch: traer, traer un array. esta funcion trae un solo registro
echo  $fila[0],'',$fila[1];

while ($fila = mysqli_fetch_array($marca))
{
  echo  $fila[0],'',$fila[1],'<br>';//tienes que verlo como una fila, osea que debes colocar el indice por cada columna de la $fila
                                    // en este caso marca tiene dos columnas id nombreMarca.
}


 ?>
</pre>
