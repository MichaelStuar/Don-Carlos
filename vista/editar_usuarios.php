
<?php
include "../vista/header.php";
include "../modelo/datos_modelo.php";
include '../controlador/usuarios_controlador.php';
include '../controlador/edificios_controlador.php';

if(isset($_GET['id']) || isset($_POST['id'])){

    if (isset($_GET['nombre'])) {
      $controlador=new usuarios_controlador();
      $controlador->editar_usuario($_GET['nombre'],$_GET['pass1'],$_GET['pass2'],$_GET['telefono'],$_GET['edificio'],$_GET['tipo'],$_GET['doc_id'],$_GET['id']);
    } else if (isset($_POST['nombre'])) {
      $controlador=new usuarios_controlador();
      $controlador->editar_usuario($_POST['nombre'],$_POST['pass1'],$_POST['pass2'],$_POST['telefono'],$_POST['edificio'],$_POST['tipo'],$_POST['doc_id'],$_POST['id']);
    } else {
      ?>
      <div class="container text-center">


  <div  style="background:white; margin:auto auto; margin-top:30px; padding:10px;" class="col-lg-4 col-lg-offset-4 ">
    <p class="h1"> Editar usuarios</p>
      <form action="editar_usuarios.php" method="post">
        Nombre:<br>
        <input type="text" class="form-control"name="nombre"> <br>
        Contraseña:<br>
        <input type="password" class="form-control"name="pass1"> <br>
        Confirmar Contraseña:<br>
        <input type="password" class="form-control"name="pass2"> <br>
        Teléfono:<br>
        <input type="text" class="form-control"name="telefono"> <br>
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
        Tipo:<br>
        <select name="tipo" class="form-control">
          <option value="1">Propietario</option>
          <option vlue="2">Administrador</option>
          <option vlue="3">Super administrador </option>
        </select>
          <br>
        Documento de identidad:<br>
        <input type="text" name="doc_id" class="form-control"> <br>
        <input type="submit" value="Editar" class="btn btn-default btn-lg btn-block">
        <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">

      <form>
      </div>
    </div>
    <?php
    }
}else{
    echo "Error, no se sabe qué usuario modificar";
}
include "../vista/footer.php";
 ?>
</body>
