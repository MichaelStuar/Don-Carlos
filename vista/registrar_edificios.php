
<?php
include "../vista/header.php";
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
<div class="container text-center">


<div  style="background:white; margin:auto auto; margin-top:30px; padding:10px;" class="col-lg-4 col-lg-offset-4 ">
<p class="h1"> Registrar edificios</p>
  <form action="registrar_edificios.php" method="post">
    Nombre:<br>
    <input type="text" class="form-control"name="nombre"> <br>
    direccion:<br>
    <input type="text" class="form-control"name="direccion"> <br>

    <input type="submit"class="btn btn-default btn-lg btn-block" value="Registrar">


  <form>
  </div>
</div>
<?php
}
include "../vista/footer.php";
 ?>
</body>
