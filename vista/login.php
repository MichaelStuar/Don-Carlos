
<?php
include "../vista/header.php";
include '../controlador/usuarios_controlador.php';
include "../modelo/datos_modelo.php";


if (isset($_GET['doc_id'])) {
  $controlador=new usuarios_controlador();
  $controlador->login($_GET['doc_id'], $_GET['contrasenia']);
} else if (isset($_POST['doc_id'])) {
  $controlador=new usuarios_controlador();
  $controlador->login($_POST['doc_id'],$_POST['contrasenia']);
} else {
  ?>
  <div class="container text-center">


<div  style="background:white; margin:auto auto; margin-top:30px; padding:10px;" class="col-lg-4 col-lg-offset-4 ">
<p class="h1"> Login</p>
  <form action="login.php" method="post">
  Documento de identidad:<br>
    <input type="text" class="form-control"name="doc_id"> <br>
    Contraseña2:<br>
    <input class="form-control" name="contrasenia" type="password"> <br>

    <input type="submit"class="btn btn-default btn-lg btn-block" value="Login">


  <form>
  </div>
</div>
<?php
}
include "../vista/footer.php";
 ?>
</body>
