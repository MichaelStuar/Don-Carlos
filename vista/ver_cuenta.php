<!DOCTIPE html>
<html lang="es">

<head>
  <title>Ver cuenta</title>
  <meta charset="utf-8"/>
</head>
<body>
<?php

include "../modelo/datos_modelo.php";
include '../controlador/cuentas_controlador.php';
include '../controlador/edificios_controlador.php';

if (true) {
  ?>
    
    <table style="width:100%">
        <tr>
            <th>Edificio</th>
            <th>Apartamento</th> 
            <th>Factura</th>
            <th>Pendiente</th>
            <th>Interes pendiente</th>
            <th>Otros peniente</th>
            <th>Extra pendiente</th>
            <th>Multa pendiente</th>
            <th>Servicios publicos pendientes</th>
            <th>Servicios pendientes</th>
            <th>NDNC pendiente</th>
            <th>Actual</th>
            <th>Interes actual</th>
            <th>Otros actual</th>
            <th>Extra_actual</th>
            <th>Multa actual</th>
            <th>Servicios publicos actual</th>
            <th>Servicios atual</th>
            <th>NDNC actuar</th>
            <th>Usuario</th>
        </tr>
        <?php 
    
        $controlador_cuentas = new cuentas_controlador();

        $cuentas = $controlador_cuentas->obtener_cuentas();
    echo(count($cuentas));
        foreach ($cuentas as $cuenta) {
            echo '<tr>';
                echo '<th>'.$cuenta["edificio"].'</th>';
                echo '<th>'.$cuenta["apartamento"].'</th>';
                echo '<th>'.$cuenta["factura"].'</th>';
                echo '<th>'.$cuenta["pendiente"].'</th>';
                echo '<th>'.$cuenta["int_pendiente"].'</th>';
                echo '<th>'.$cuenta["otros_pendiente"].'</th>';
                echo '<th>'.$cuenta["extra_pendiente"].'</th>';
                echo '<th>'.$cuenta["multa_pendiente"].'</th>';
                echo '<th>'.$cuenta["servicios_publicos_pendiente"].'</th>';
                echo '<th>'.$cuenta["servicios_pendiente"].'</th>';
                echo '<th>'.$cuenta["ndnc_pendiente"].'</th>';
                echo '<th>'.$cuenta["actual"].'</th>';
                echo '<th>'.$cuenta["interes_actual"].'</th>';
                echo '<th>'.$cuenta["otros_actual"].'</th>';
                echo '<th>'.$cuenta["extra_actual"].'</th>';
                echo '<th>'.$cuenta["multa_actual"].'</th>';
                echo '<th>'.$cuenta["servicios_publicos_actual"].'</th>';
                echo '<th>'.$cuenta["servicios_actual"].'</th>';
                echo '<th>'.$cuenta["ndnc_actual"].'</th>';
                echo '<th>'.$cuenta["usuario"].'</th>';
            echo '</tr>';
        }
    
    
        ?>    
        
    
    </table>
    
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
  <form action="registrar_cuenta.php" method="post">
    Edificio:<br>
    <select name="edificio">
      <?php
        $controlador2=new edificios_controlador();

        $edificios=$controlador2->obtener_edificios();
        foreach ($edificios as $key) {
          echo '<option value="'.$key["id"].'">'.$key["nombre"].'</option>';
        }
      ?>
    </select><br>


  <form>
<?php
}

 ?>
</body>
