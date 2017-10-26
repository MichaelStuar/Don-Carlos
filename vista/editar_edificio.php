<!DOCTIPE html>
<html lang="es">

<head>
  <title>Editar nuevo edificio</title>
  <meta charset="utf-8"/>
</head>
<body>
<?php
include "../modelo/datos_modelo.php";
include '../controlador/edificios_controlador.php';

if (isset($_GET['id'])|| isset($_POST['id'])) {
  $controlador=new edificios_controlador();
  $id='';
  if (isset($_GET['id']))
  {
    $id=$_GET['id'];
  }
  else {
    $id=$_POST['id'];
  }
  if (isset($_GET['nombre'])) {

    $controlador->editar_edificio($_GET['nombre'],$_GET['direccion'],$_GET['id']);
  } else if (isset($_POST['nombre'])) {

    $controlador->editar_edificio($_POST['nombre'],$_POST['direccion'],$_POST['id']);
  } else {
      $ediret=$controlador->obtener_edificio($id);

    ?>
    <form action="editar_edificio.php" method="post">
      Nombre:<br>
      <input type="text" name="nombre" value="<?php echo( $ediret['nombre']); ?>"> <br>
      Direccion:<br>
      <input type="text" name="direccion" value="<?php echo( $ediret['direccion']); ?>"> <br>

      <input type="hidden" name="id" value="<?php  echo $_GET["id"];?>"> <br>
      <input type="submit" value="Editar">


    <form>
  <?php
    }
  }
  else {
    echo "Error,no hay edifio seleccionado";
  }

 ?>
</body>
