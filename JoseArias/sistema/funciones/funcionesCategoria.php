<?php 
#####################################
########## CRUD MARCAS ##############
function ListarCategorias()
{
  $link = conectar();
  $sql ="SELECT idCategoria, catNombre
  FROM categorias";
  $retorno = mysqli_query($link,$sql);
  return $retorno;
}
