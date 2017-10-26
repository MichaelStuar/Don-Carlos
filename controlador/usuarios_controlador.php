<?php
class usuarios_controlador
{

  function registrar_usuario($nombre,$pass1,$pass2,$telefono,$edificio,$tipo,$doc_id,$id)
  {
    $modelo=new datos_modelo();
    if ($pass1!=$pass2) {
      header('Location: ../vista/mensajes.php?msj=contraseña incorrecta' );
    }
    else {
      $password=$pass1;
      $modelo->crear_usuario($nombre,$telefono,$password,$edificio,$tipo,$doc_id,$id);
      header('Location: ../vista/mensajes.php?msj=Usuario registrado' );
    }
  }

  function editar_usuario($nombre,$pass1,$pass2,$telefono,$edificio,$tipo,$doc_id,$id)
  {
    $modelo=new datos_modelo();
    if ($pass1!=$pass2) {
      header('Location: ../vista/mensajes.php?msj=contraseña incorrecta' );
    }
    else {
      $password=$pass1;
      $modelo->editar_usuario($nombre,$telefono,$password,$edificio,$tipo,$doc_id,$id);
      //header('Location: ../vista/mensajes.php?msj=Usuario Editado' );
    }
  }
}




 ?>
