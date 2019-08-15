<?php 
function ListarUsuarios()
{
  $link = conectar();
  $sql ="SELECT usuNombre, 
  				usuApellido,
  				usuEmail
  FROM usuarios";
  $retorno = mysqli_query($link,$sql);
  return $retorno;
}	

