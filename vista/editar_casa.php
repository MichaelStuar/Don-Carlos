<!DOCTIPE html>
<html lang="es">

<head>
  <title>Editar casa</title>
  <meta charset="utf-8"/>
</head>
<body>
<?php
include "../modelo/datos_modelo.php";
include '../controlador/casas_controlador.php';
include '../controlador/edificios_controlador.php';

if (isset($_GET['edificio'])) {
  $controlador=new casas_controlador();
  $controlador->registrar_casa($_GET['propietario'],$_GET['edificio'],$_GET['apartamento']);
} else if (isset($_POST['edificio'])) {
  $controlador=new casas_controlador();
  $controlador->registrar_casa($_POST['propietario'],$_POST['edificio'],$_POST['apartamento']);
} else {
  ?>
  <form action="editar_casa.php" method="post">
    Propietario:<br>
    <input type="text" name="propietario"> <br>
    Edificio:<br>
    <select name="edificio">
      <?php
        $controlador2=new edificios_controlador();

        $edificios=$controlador2->obtener_edificios();
        foreach ($edificios as $key) {
          echo '<option value="'.$key["id"].'">'.$key["nombre"].'</option>';
        }
      ?>


        </select>
    <br>Apartamento:<br>
    <input type="text" name="apartamento"> <br>

    <input type="submit" value="Registrar">


  <form>
<?php
}

 ?>
</body>
