<?php

class conexion
{

  function conectar()
  {
    $usuario="root";
    $password="";
    $host="localhost";
    $database="dc";
    $mysqli= mysqli_connect($host,$usuario,$password,$database);
    //return mysqli_connect($host,$usuario,$password);
    return $mysqli;

  }
}


 ?>
