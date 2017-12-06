<?php

include "../vista/header.php";
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

    <div class="container text-center">


<div  style="background:white; margin:auto auto; margin-top:30px; padding:10px;" class="col-lg-4 col-lg-offset-4 ">
  <p class="h1"> Editar casa</p>
    <form action="editar_casa.php" method="post">
      Propietario:<br>
      <select name="propietario" class="form-control">
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
      <br>Apartamento:<br>
      <input type="text"class="form-control" name="apartamento" value="<?php echo( $ediret['apartamento']); ?> "> <br>
      Edificio:<br>
      <select name="edificio" class="form-control">
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

      <input type="hidden" name="id" value="<?php  echo $_GET["id"];?>" class="form-control"> <br>
      <input type="submit" value="Editar"  class="btn btn-default btn-lg btn-block">


    <form>
    </div>
</div>
  <?php
    }
  }
  else {
    echo "Error,no hay casa seleccionado";
  }

include "../vista/footer.php";
 ?>
