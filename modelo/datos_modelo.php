<?php

include "conexion.php";


class datos_modelo
{
  function crear_edificio($nombre,$direcci)
  {
    $mysql=new conexion();
    $sql="INSERT INTO `edificios` (`nombre`, `direccion`) VALUES ('".$nombre."', '".$direccion."');";
    $con=$mysql->conectar();
    mysqli_query($con,$sql);
  }
  function editar_edificio($nombre,$direcci,$id)
  {
    $mysql=new conexion();
    $sql="UPDATE `edificios` SET `nombre`='".$nombre."', `direccion`='".$direcci."' WHERE `edificios`.`id` =".$id.";";
    $con=$mysql->conectar();
    mysqli_query($con,$sql);
    echo "$sql";

  }function editar_casa($propietario,$edificio,$apartamentp,$id)
  {
    $mysql=new conexion();
    $sql="UPDATE `casas` SET `propietario`='".$propietario."', `edificio`='".$edificio."', `apartamento`='".$apartamento."' WHERE `casas`.`id` =".$id.";";
    $con=$mysql->conectar();
    mysqli_query($con,$sql);
    echo "$sql";

  }


    function crear_casa($propietario,$edificio,$apartamento)
    {
      $mysql=new conexion();
      $sql="INSERT INTO `casas` (`propietario`, `edificio`,`apartamento`) VALUES ('".$propietario."', '".$edificio."','".$apartamento."');";
      $con=$mysql->conectar();
      mysqli_query($con,$sql);
    }


      function crear_usuario($nombre,$telefono,$contra,$edificio,$tipo,$doc_id)
      {
        $mysql=new conexion();
        $sql="INSERT INTO `usuarios` (`nombre`, `telefono`, `contrasenia`, `edificio`, `tipo`, `doc_id`) VALUES ('".$nombre."', '".$telefono."', '".$contra."', '".$edificio."', '".$tipo."', '".$doc_id."');";
        $con=$mysql->conectar();
        echo $sql;
        mysqli_query($con,$sql);
      }
      function editar_usuario($nombre,$telefono,$contra,$edificio,$tipo,$doc_id,$id)
      {
        $mysql=new conexion();
        $sql="UPDATE `usuarios` SET `nombre` = '".$nombre."', `telefono` = '".$telefono."', `contrasenia` = '".$contra."', `edificio` = '".$edificio."', `tipo` = '".$tipo."', `doc_id`='".$doc_id."' WHERE `usuarios`.`id` =".$id." ;";
        $con=$mysql->conectar();
        echo $sql;
        mysqli_query($con,$sql);
      }


      public function obtener_edificios()
      {
        $mysql=new conexion();
        $sql="SELECT * FROM `edificios`";
        $con=$mysql->conectar();
        $resultado= mysqli_query($con,$sql);

        $nLista = array();

        if ($resultado->num_rows > 0) {

            while($row = $resultado->fetch_assoc()) {
                $c = array( "nombre" => $row["nombre"], "direccion" => $row["direccion"], "id" => $row["id"], "administrador" => $row["administrador"]);
                array_push ($nLista,$c);
            }
        }
        return $nLista;
      }
      public function obtener_casas()
      {
        $mysql=new conexion();
        $sql="SELECT * FROM `casas`";
        $con=$mysql->conectar();
        $resultado= mysqli_query($con,$sql);

        $nLista = array();

        if ($resultado->num_rows > 0) {

            while($row = $resultado->fetch_assoc()) {
                $c = array( "propietario" => $row["propietario"], "edificio" => $row["edificio"], "apartamento" => $row["apartamento"], "id" => $row["id"]);
                array_push ($nLista,$c);
            }
        }
        return $nLista;
      }
      public function obtener_edificio($id)
      {

        $mysql=new conexion();
        $sql="SELECT * FROM `edificios` WHERE `edificios`.`id` =".$id." ;";
        $con=$mysql->conectar();
        $resultado= mysqli_query($con,$sql);


        if ($resultado->num_rows > 0) {
          while($row = $resultado->fetch_assoc()) {
                $c = array( "nombre" => $row["nombre"], "direccion" => $row["direccion"], "id" => $row["id"], "administrador" => $row["administrador"]);
                return $c;
            }
          }
      }
      public function obtener_usuarios()
      {
        $mysql=new conexion();
        $sql="SELECT * FROM `usuarios`";
        $con=$mysql->conectar();
        $resultado= mysqli_query($con,$sql);

        $nLista = array();
        if ($resultado->num_rows > 0) {
            // Esto hay que arreglarlo
            while($row = $resultado->fetch_assoc()) {
                $c = array( "nombre" => $row["nombre"], "direccion" => $row["direccion"], "id" => $row["id"], "administrador" => $row["administrador"]);
                array_push ($nLista,$c);
            }
        }
        return $nLista;
      }
}

 ?>
