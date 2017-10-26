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
  if (isset($_GET['propietario'])) {

    $controlador->editar_casa($_GET['propietario'],$_GET['apartamento'],$_GET['edificio'],$_GET['id']);
  } else if (isset($_POST['propietario'])) {

    $controlador->editar_casa($_POST['propietario'],$_POST['apartamento'],$_POST['edi'],$_POST['id']);
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
