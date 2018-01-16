<?php
include "../modelo/datos_modelo.php";
include '../controlador/casas_controlador.php';
include "../controlador/cuentas_controlador.php";

if(true){
  $controlador_cuentas=new cuentas_controlador();
  $controlador_casas = new casas_controlador();
  $casas = $controlador_casas->obtener_casas_de(1);
  foreach ($casas as $casa)
      {
        $cuenta=$controlador_cuentas->obtener_cuentas_pendientes_de($casa["apartamento"],$casa["edificio"]);
        ?>
        <table class="tg">
          <tr>
            <th class="tg-yw4l">edificio</th>
            <th class="tg-yw4l">apartamento</th>
            <th class="tg-yw4l">factura</th>

          </tr>
          <tr>
            <td class="tg-yw4l"><?php echo $cuenta["edificio"];?></td>
            <td class="tg-yw4l"><?php echo $cuenta["apartamento"];?></td>
            <td class="tg-yw4l"><?php echo $cuenta["factura"];?></td>

          </tr>
          <tr>
            <td class="tg-yw4l" colspan="3">pendiente</td>
          </tr>
          <tr>
            <td class="tg-yw4l" colspan="3"><?php echo  $cuenta["pendiente"];?></td>
          </tr>
        </table>
        <?php
      }
}
?>
<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
.tg .tg-yw4l{vertical-align:top}
</style>
