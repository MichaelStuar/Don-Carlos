
<?php
include "../vista/header.php";
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
  <div class="container text-center">


  <div  style="background:white; margin:auto auto; margin-top:30px; padding:10px;" class="col-lg-4 col-lg-offset-4 ">
  <p class="h1"> Registrar usuarios</p>
  <form action="registrar_usuarios.php" method="post">
    Nombre:<br>
    <input type="text"class="form-control" class="form-control"name="nombre"> <br>
    Contraseña:<br>
    <input type="password"class="form-control" class="form-control"name="pass1"> <br>
    Confirmar Contraseña:<br>
    <input type="password" class="form-control" class="form-control"name="pass2"> <br>
    Teléfono:<br>
    <input type="text"class="form-control" class="form-control"name="telefono"> <br>
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
    </select class="form-control"><br>
    Tipo:<br>
    <select name="tipo"  class="form-control">
      <option value="1">Propietario</option>
      <option vlue="2">Administrador</option>
      <option vlue="3">Super administrador </option>
    </select class="form-control">
      <br>
    Documento de identidad:<br>
    <input type="text"class="form-control" name="doc_id"> <br>
    <input type="hidden" name="edificio" value="0"> <br>
    <input type="submit" class="btn btn-default btn-lg btn-block"value="Registrar">


  <form>
  </div>
</div>
<?php
}
include "../vista/footer.php";
 ?>
</body>
