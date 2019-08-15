<?php
#####################################
########## CRUD MARCAS ##############
function ListarProductos()
{
  $link = conectar();
/*
$sql ="SELECT marc.mkNombre,
                cat.catNombre,
                pro.idProducto,pro.prdNombre,pro.prdPrecio,pro.prdPresentacion,pro.prdImagen  
  FROM productos pro 
  INNER JOIN categorias cat ON pro.idCategoria = cat.idCategoria
  INNER JOIN marcas marc ON pro.idMarca = cat.idMarca
  ";
*/
 $sql = "SELECT idProducto, 
                prdNombre, 
                prdPrecio, 
                prdPresentacion,
                prdImagen

          FROM productos";

  $retorno = mysqli_query($link,$sql);//link conexion al servidor, $sql seleccionar base de datos
  return $retorno;
}
