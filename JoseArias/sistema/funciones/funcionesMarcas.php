<?php
#####################################
########## CRUD MARCAS ##############
function ListarMarcas()
{
  $link = conectar();
  $sql ="SELECT idMarca, mkNombre
  FROM marcas";
  $retorno = mysqli_query($link,$sql);
  return $retorno;
}

