
<?php
include "../modelo/datos_modelo.php";
include '../controlador/casas_controlador.php';
include "../controlador/cuentas_controlador.php";
include "header.php";

function formatear($cuanto){
    $formatter = new NumberFormatter('en_US',  NumberFormatter::CURRENCY);
    $cosa =  $formatter->formatCurrency($cuanto, 'USD');
    return($cosa);
}

if(true){

  $controlador_cuentas=new cuentas_controlador();
  $controlador_casas = new casas_controlador();
  $casas = $controlador_casas->obtener_casas_de(1);
  ?>
  <div  style="background:white; margin:auto auto; margin-top:30px; padding:30px;" class="col-lg-4 col-lg-offset-4 ">
    <?php
  foreach ($casas as $casa)
      {
        $cuenta=$controlador_cuentas->obtener_cuentas_pendientes_de($casa["apartamento"],$casa["edificio"]);
        ?>
        <table class="tg" aling="center">
          <tr style="background-color: #b3b5b7;">
            <th class="tg-yw4l"> <strong> Edificio</strong></th>
            <th class="tg-yw4l"><strong>Apartamento</strong></th>
            <th class="tg-yw4l"><strong>factura</strong></th>

          </tr>
          <tr>
            <td class="tg-yw4l"><?php echo $cuenta["edificio"];?></td>
            <td class="tg-yw4l"><?php echo $cuenta["apartamento"];?></td>
            <td class="tg-yw4l"><?php echo $cuenta["factura"];?></td>

          </tr>


          <tr style="text-align: center; background-color:#b3b5b7;">

            <td class="tg-yw4l" colspan="3"><strong>Pendiente</strong></td>
          </tr>
          <tr
          style="text-align: center; font-size:30px;">
            <td class="tg-yw4l" colspan="3"><?php echo formatear($cuenta["pendiente"]);?></td>
          </tr>
        </table>
      </br>
        <?php
      }
}
?>
<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#b3b5b7;}
.tg th{font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color: #b3b5b7;}
.tg .tg-yw4l{vertical-align:top}
</style>
</div>
<?php
include "footer.php";
 ?>
