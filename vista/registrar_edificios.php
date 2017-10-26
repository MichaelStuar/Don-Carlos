<!DOCTIPE html>
<html lang="es">

<head>
  <title>Registrar nuevo edificio</title>
  <meta charset="utf-8"/>
</head>
<body>
<?php
include "../modelo/datos_modelo.php";
include '../controlador/edificios_controlador.php';

if (isset($_GET['nombre'])) {
  $controlador=new edificios_controlador();
  $controlador->registrar_edificio($_GET['nombre'],$_GET['direccion']);
} else if (isset($_POST['nombre'])) {
  $controlador=new edificios_controlador();
  $controlador->registrar_edificio($_POST['nombre'],$_POST['direccion']);
} else {
  ?>
  <form action="registrar_edificios.php" method="post">
    Nombre:<br>
    <input type="text" name="nombre"> <br>
    direccion:<br>
    <input type="text" name="direccion"> <br>

    <input type="submit" value="Registrar">


  <form>
<?php
}

 ?>
</body>
