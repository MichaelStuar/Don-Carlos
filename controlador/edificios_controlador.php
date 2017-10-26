<?php
//include "../modelo/datos_modelo.php";
class edificios_controlador
{

  function registrar_edificio($nombre,$direccion)
  {
    $modelo=new datos_modelo();
    $modelo->crear_edificio($nombre,$direccion);
    header('Location: ../vista/mensajes.php?msj=edificio registrado' );

  }
  function obtener_edificios(){
      $modelo=new datos_modelo();
      $edifs=$modelo->obtener_edificios();
      if ($edifs!=0) {
        return $edifs;
      }

  }
  function editar_edificio($nombre,$direccion,$id){
    $modelo=new datos_modelo();
    $modelo->editar_edificio($nombre,$direccion,$id);
    //header('Location: ../vista/mensajes.php?msj=edificio editado' );
  }
  function obtener_edificio($id){
    $modelo=new datos_modelo();
    $edifis=$modelo->obtener_edificio($id);
    
    return $edifis;

  }
}



 ?>
