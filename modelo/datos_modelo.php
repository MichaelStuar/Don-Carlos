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

      function crear_cuenta($edificio,$apartamento,$factura,$pendiente,$int_pendiente,$otros_pendiente,$extra_pendiente,$multa_pendiente,$servicios_publicos_pendiente,$servicios_pendiente,$ndnc_pendiente,$actual,$interes_actual,$otros_actual,$extra_actual,$multa_actual,$servicios_publicos_actual,$servicios_actual,$ndnc_actual,$usuario)
      {
        $mysql=new conexion();
        $sql="INSERT INTO `cuentas`
          (`edificio`,
            `apartamento`,
            `factura`,
            `pendiente`,
            `int_pendiente`,
            `otros_pendiente`,
            `extra_pendiente`,
            `multa_pendiente`,
            `servicios_publicos_pendiente`,
            `servicios_pendiente`,
            `ndnc_pendiente`,
            `actual`,
            `interes_actual`,
            `otros_actual`,
            `extra_actual`,
            `multa_actual`,
            `servicios_publicos_actual`,
            `servicios_actual`,
            `ndnc_actual`,
            `usuario`) VALUES ('".$edificio."', '".$apartamento."', '".$factura."', '".$pendiente."', '".$int_pendiente."', '".$otros_pendiente."', '".$extra_pendiente."', '".$multa_pendiente."', '".$servicios_publicos_pendiente."', '".$servicios_pendiente."', '".$ndnc_pendiente."', '".$actual."', '".$interes_actual."', '".$otros_actual."',  '".$extra_actual."',  '".$multa_actual."', '".$servicios_publicos_actual."',  '".$servicios_actual."',   '".$ndnc_actual."', '".$usuario."');";
        $con=$mysql->conectar();
        echo $sql;
        mysqli_query($con,$sql);
      }
      public function obtener_cuentas()
      {
        $mysql=new conexion();
        $sql="SELECT * FROM `cuentas`";
        $con=$mysql->conectar();
        $resultado= mysqli_query($con,$sql);

        $nLista = array();

        if ($resultado->num_rows > 0) {

            while($row = $resultado->fetch_assoc()) {
                $c = array(
                    "edificio" => $row["edificio"],
                    "apartamento" => $row["apartamento"],
                    "factura" => $row["factura"],
                    "pendiente" => $row["pendiente"],
                    "int_pendiente" => $row["int_pendiente"],
                    "otros_pendiente" => $row["otros_pendiente"],
                    "extra_pendiente" => $row["extra_pendiente"],
                    "multa_pendiente" => $row["multa_pendiente"],
                    "servicios_publicos_pendiente" => $row["servicios_publicos_pendiente"],
                    "servicios_pendiente" => $row["servicios_pendiente"],
                    "ndnc_pendiente"=> $row["ndnc_pendiente"],
                    "actual" => $row["actual"],
                    "interes_actual" => $row["interes_actual"],
                    "otros_actual" => $row["otros_actual"],
                    "extra_actual" => $row["extra_actual"],
                    "multa_actual" => $row["multa_actual"],
                    "servicios_publicos_actual" => $row["servicios_publicos_actual"],
                    "servicios_actual" => $row["servicios_actual"],
                    "ndnc_actual" => $row["ndnc_actual"],
                    "usuario" => $row["usuario"]);
                array_push ($nLista,$c);
            }
        }
        return $nLista;
      }
      public function obtener_cuentas_pendientes()
      {
        $mysql=new conexion();
        $sql="SELECT * FROM `cuentas`  WHERE `cuentas`.`pendiente` >0 ORDER BY  `cuentas`.`pendiente` DESC;";
        $con=$mysql->conectar();
        $resultado= mysqli_query($con,$sql);

        $nLista = array();

        if ($resultado->num_rows > 0) {

            while($row = $resultado->fetch_assoc()) {
                $c = array(
                    "edificio" => $row["edificio"],
                    "apartamento" => $row["apartamento"],
                    "factura" => $row["factura"],
                    "pendiente" => $row["pendiente"],
                    "int_pendiente" => $row["int_pendiente"],
                    "otros_pendiente" => $row["otros_pendiente"],
                    "extra_pendiente" => $row["extra_pendiente"],
                    "multa_pendiente" => $row["multa_pendiente"],
                    "servicios_publicos_pendiente" => $row["servicios_publicos_pendiente"],
                    "servicios_pendiente" => $row["servicios_pendiente"],
                    "ndnc_pendiente"=> $row["ndnc_pendiente"],
                    "actual" => $row["actual"],
                    "interes_actual" => $row["interes_actual"],
                    "otros_actual" => $row["otros_actual"],
                    "extra_actual" => $row["extra_actual"],
                    "multa_actual" => $row["multa_actual"],
                    "servicios_publicos_actual" => $row["servicios_publicos_actual"],
                    "servicios_actual" => $row["servicios_actual"],
                    "ndnc_actual" => $row["ndnc_actual"],
                    "usuario" => $row["usuario"]);
                array_push ($nLista,$c);
            }
        }
        return $nLista;
      }

      function editar_usuario($nombre,$telefono,$contra,$edificio,$tipo,$doc_id,$id)
      {
        $mysql=new conexion();
        $sql="UPDATE `usuarios` SET `nombre` = '".$nombre."', `telefono` = '".$telefono."', `contrasenia` = '".$contra."', `edificio` = '".$edificio."', `tipo` = '".$tipo."', `doc_id`='".$doc_id."' WHERE `usuarios`.`id` =".$id." ;";
        $con=$mysql->conectar();
        echo $sql;
        mysqli_query($con,$sql);
      }

      function obtener_usuario_docId($doc_id)
      {
        $mysql=new conexion();
        $sql="SELECT * FROM `usuarios`WHERE `usuarios`.`doc_id` ='".$doc_id."' ;";
        $con=$mysql->conectar();
        $resultado= mysqli_query($con,$sql);

        if ($resultado->num_rows > 0) {
          while($row = $resultado->fetch_assoc()) {
                $c = array( "id" => $row["id"], "nombre" => $row["nombre"], "telefono" => $row["telefono"], "edificio" => $row["edificio"], "contrasenia" => $row["contrasenia"], "doc_id" => $row["doc_id"]);
                return $c;
            }
          }

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
      public function obtener_casa($id)
      {

        $mysql=new conexion();
        $sql="SELECT * FROM `casas` WHERE `casas`.`id` =".$id." ;";
        $con=$mysql->conectar();
        $resultado= mysqli_query($con,$sql);


        if ($resultado->num_rows > 0) {
          while($row = $resultado->fetch_assoc()) {
                $c = array( "propietario" => $row["propietario"], "edificio" => $row["edificio"], "id" => $row["id"], "apartamento" => $row["apartamento"]);
                return $c;
            }
          }
      }
      public function obtener_usuario($id)
      {

        $mysql=new conexion();
        $sql="SELECT * FROM `usuarios` WHERE `usuarios`.`id` =".$id." ;";
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
                $c = array( "nombre" => $row["nombre"], "telefono" => $row["telefono"], "edificio" => $row["edificio"], "id" => $row["id"], "doc_id" => $row["doc_id"], "contrasenia" => $row["contrasenia"]);
                array_push ($nLista,$c);
            }
        }
        return $nLista;
      }
}

 ?>
