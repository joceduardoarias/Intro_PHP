<?php

const SERVER = 'localhost'; //constantes de conexion, para los parametros del mysqli_connect
const USUARIO = 'root';
const CLAVE = '';
const BBDD = 'catalogo';

function conectar()
{
  $link = mysqli_connect //conexion al servidor
  (
      SERVER,
      USUARIO,
        CLAVE,
        BBDD
  );
return $link;// devuelve un objeto de tipo "mysqli"
}
