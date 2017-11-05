<!DOCTIPE html>
<html lang="es">

<head>
  <title>Login</title>
  <meta charset="utf-8"/>
</head>
<body>
<?php
include '../controlador/usuarios_controlador.php';
include "../modelo/datos_modelo.php";

if (isset($_GET['doc_id'])) {
  $controlador=new usuarios_controlador();
  $controlador->login($_GET['doc_id'],$_GET['contrasenia']);
} else if (isset($_POST['doc_id'])) {
  $controlador=new usuarios_controlador();
  $controlador->login($_POST['doc_id'],$_POST['contrasenia']);
} else {
  ?>
  <form action="login.php" method="post">
  Documento de identidad:<br>
    <input type="text" name="doc_id"> <br>
    Contraseña:<br>
    <input type="text" name="contrasenia"> <br>

    <input type="submit" value="Login">


  <form>
<?php
}

 ?>
</body>
