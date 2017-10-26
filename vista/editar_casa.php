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
include '../controlador/casas_controlador.php';
include '../controlador/usuarios_controlador.php';


if (isset($_GET['id'])|| isset($_POST['id'])) {
  $controlador=new edificios_controlador();
  $controlador2=new casas_controlador();

  $id='';
  if (isset($_GET['id']))
  {
    $id=$_GET['id'];
  }
  else {
    $id=$_POST['id'];
  }
  if (isset($_GET['propietario'])) {

    $controlador2->editar_casa($_GET['propietario'],$_GET['apartamento'],$_GET['edificio'],$_GET['id']);
  } else if (isset($_POST['propietario'])) {

    $controlador2->editar_casa($_POST['propietario'],$_POST['apartamento'],$_POST['edificio'],$_POST['id']);
  } else {
      $ediret=$controlador2->obtener_casa($id);

    ?>
    <form action="editar_casa.php" method="post">
      <select name="propietario">
        <?php
          $controlador3=new usuarios_controlador();

          $usuarios=$controlador3->obtener_usuarios();
          foreach ($usuarios as $usuario) {
            if ($usuario["id"]==$ediret["propietario"]) {
              echo '<option value="'.$usuario["id"].'"  selected="selected">'.$usuario["nombre"].'</option>';
            }
            else {
              echo '<option value="'.$usuario["id"].'">'.$usuario["nombre"].'</option>';
            }

          }
        ?>
      </select>
      Apartamento:<br>
      <input type="text" name="apartamento" value="<?php echo( $ediret['apartamento']); ?>"> <br>
      Edificio:<br>
      <select name="edificio">
        <?php
          $controlador2=new edificios_controlador();

          $edificios=$controlador2->obtener_edificios();
          foreach ($edificios as $key) {
            if ($key["id"]==$ediret["edificio"]) {
              echo '<option value="'.$key["id"].'"  selected="selected">'.$key["nombre"].'</option>';
            }
            else {
              echo '<option value="'.$key["id"].'">'.$key["nombre"].'</option>';
            }

          }
        ?>
      </select>

      <input type="hidden" name="id" value="<?php  echo $_GET["id"];?>"> <br>
      <input type="submit" value="Editar">


    <form>
  <?php
    }
  }
  else {
    echo "Error,no hay casa seleccionado";
  }

 ?>
</body>
