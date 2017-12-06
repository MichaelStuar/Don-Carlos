
<?php
include "../vista/header.php";
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
  <div class="container text-center">


<div  style="background:white; margin:auto auto; margin-top:30px; padding:10px;" class="col-lg-4 col-lg-offset-4 ">
<p class="h1"> Registrar casa</p>
  <form action="registrar_casa.php" method="post">
    Propietario:<br>
    <input type="text"class="form-control" name="propietario"> <br>
    Edificio:<br>
    <select name="edificio"class="form-control">
      <?php
        $controlador2=new edificios_controlador();

        $edificios=$controlador2->obtener_edificios();
        foreach ($edificios as $key) {
          echo '<option value="'.$key["id"].'">'.$key["nombre"].'</option>';
        }




      ?>


    </select class="form-control"><br>
    Apartamento:<br>
    <input type="text" class="form-control"name="apartamento"> <br>

    <input type="submit"class="btn btn-default btn-lg btn-block" value="Registrar">


  <form>
  </div>
</div>
<?php
}
include "../vista/footer.php";
 ?>
</body>
