<?php
class casas_controlador
{

    function registrar_casa($propietario,$edificio,$apartamento)
    {
        $modelo=new datos_modelo();
        $modelo->crear_casa($propietario,$edificio,$apartamento);
        header('Location: ../vista/mensajes.php?msj=casa registrado' );
    }
    function obtener_casas_de($id)
    {
        $modelo=new datos_modelo();
        return $modelo->obtener_casas_de($id);
    }
    function obtener_casa($id)
    {
        $modelo=new datos_modelo();
        return $modelo->obtener_casa($id);
    }
    function editar_casa($propietario,$apartamento,$edificio,$id){
      $modelo=new datos_modelo();
      $modelo->editar_casa($propietario,$apartamento,$edificio,$id);
      //header('Location: ../vista/mensajes.php?msj=edificio editado' );
    }

}



 ?>
