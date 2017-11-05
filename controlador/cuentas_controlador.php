<?php
class cuentas_controlador
{
function crear_cuenta(
  $edificio,
  $apartamento,
  $factura,
  $pendiente,
  $int_pendiente,
  $otros_pendiente,
  $extra_pendiente,
  $multa_pendiente,
  $servicios_publicos_pendiente,
  $servicios_pendiente,
  $ndnc_pendiente,
  $actual,
  $interes_actual,
  $otros_actual,
  $extra_actual,
  $multa_actual,
  $servicios_publicos_actual,
  $servicios_actual,
  $ndnc_actual,
  $usuario)

{
$modelo=new datos_modelo();
$modelo->crear_cuenta(
  $edificio,
  $apartamento,
  $factura,
  $pendiente,
  $int_pendiente,
  $otros_pendiente,
  $extra_pendiente,
  $multa_pendiente,
  $servicios_publicos_pendiente,
  $servicios_pendiente,
  $ndnc_pendiente,
  $actual,
  $interes_actual,
  $otros_actual,
  $extra_actual,
  $multa_actual,
  $servicios_publicos_actual,
  $servicios_actual,
  $ndnc_actual,
  $usuario);
header('Location: ../vista/mensajes.php?msj=cuenta registrada' );

}
function obtener_cuentas()
{
    $modelo=new datos_modelo();
    return $modelo->obtener_cuentas();
}


}


 ?>
