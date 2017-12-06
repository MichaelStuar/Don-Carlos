<!DOCTIPE html>
<html lang="es">

<head>
  <title>Registrar nuevo usuario</title>
  <meta charset="utf-8"/>
</head>
<body>
<?php

include "../modelo/datos_modelo.php";
include '../controlador/usuarios_controlador.php';
include '../controlador/edificios_controlador.php';

if (isset($_GET['nombre'])) {
  $controlador = new usuarios_controlador();
  $controlador->registrar_usuario ($_GET['nombre'],$_GET['pass1'],$_GET['pass2'],$_GET['telefono'],$_GET['edificio'],$_GET['tipo'],$_GET['doc_id']);
} else if (isset($_POST['nombre'])) {
  $controlador = new usuarios_controlador();
  $controlador->registrar_usuario ($_POST['nombre'],$_POST['pass1'],$_POST['pass2'],$_POST['telefono'],$_POST['edificio'],$_POST['tipo'],$_POST['doc_id']);
} else {
  ?>
  <form action="registrar_usuarios.php" method="post">
    Nombre:<br>
    <input type="text" name="nombre"> <br>
    Contraseña:<br>
    <input type="password" name="pass1"> <br>
    Confirmar Contraseña:<br>
    <input type="password" name="pass2"> <br>
    Teléfono:<br>
    <input type="text" name="telefono"> <br>
      <!--
    Edificio:<br>
    <select name="edificio">
      <?php
    /*
        $controlador2=new edificios_controlador();

        $edificios=$controlador2->obtener_edificios();
        foreach ($edificios as $key) {
          echo '<option value="'.$key["id"].'">'.$key["nombre"].'</option>';
        }
        
*/
      ?>
        -->
    </select><br>
    Tipo:<br>
    <select name="tipo">
      <option value="1">Propietario</option>
      <option vlue="2">Administrador</option>
      <option vlue="3">Super administrador </option>
    </select>
      <br>
    Documento de identidad:<br>
    <input type="text" name="doc_id"> <br>
    <input type="submit" value="Registrar">


  <form>
<?php
}

 ?>
</body>
