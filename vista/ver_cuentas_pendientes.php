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
    
    
    $controlador_cuentas = new cuentas_controlador();
    $cuentas = $controlador_cuentas->obtener_cuentas_pendientes();
    $controlador2=new edificios_controlador();
    $edificios=$controlador2->obtener_edificios();
    
    //echo('Número de registros: '.count($cuentas).'</br>');
    
    $mes_0 = array();
    $mes_1 = array();
    $mes_2 = array();
    $mes_3 = array();
    foreach($cuentas as $cuenta){
        $meses_pendientes=$cuenta["pendiente"] / $cuenta["actual"];
        $meses_pendientes=round($meses_pendientes);
        if($meses_pendientes<1){
            array_push($mes_0,$cuenta);
        }else if($meses_pendientes<2){
            array_push($mes_1,$cuenta);
        }else if($meses_pendientes<3){
            array_push($mes_2,$cuenta);
        }else{
            array_push($mes_3,$cuenta);
        }
    }
    echo "Cuentas pendientes a menos de 30 días</br>";
    echo '<table style="width:100%"><tr><th>Apartamento</th> 
        <th>Factura</th>
        <th>Pendiente</th>
        <th>Interes pendiente</th>
        <th>Otros peniente</th>
        <th>Extra pendiente</th>
        <th>Multa pendiente</th>
        <th>Servicios publicos pendientes</th>
        <th>Servicios pendientes</th>
        <th>NDNC pendiente</th>
        </tr>';

    foreach($mes_0 as $cuenta)
    {
        echo '<tr>';
            echo '<th>'.$cuenta["apartamento"].'</th>';
            echo '<th>'.$cuenta["factura"].'</th>';
        
            echo '<th>'.$controlador_cuentas->formatear_a_dinero($cuenta["pendiente"]).'</th>';
        
            echo '<th>'.$cuenta["int_pendiente"].'</th>';
            echo '<th>'.$cuenta["otros_pendiente"].'</th>';
            echo '<th>'.$cuenta["extra_pendiente"].'</th>';
            echo '<th>'.$cuenta["multa_pendiente"].'</th>';
            echo '<th>'.$cuenta["servicios_publicos_pendiente"].'</th>';
            echo '<th>'.$cuenta["servicios_pendiente"].'</th>';
            echo '<th>'.$cuenta["ndnc_pendiente"].'</th>';
        echo '</tr>';
    }
    echo '</table> </br> </br>';
    
    
    echo "Cuentas pendientes a 30 días</br>";
    echo '<table style="width:100%"><tr><th>Apartamento</th> 
        <th>Factura</th>
        <th>Pendiente</th>
        <th>Interes pendiente</th>
        <th>Otros peniente</th>
        <th>Extra pendiente</th>
        <th>Multa pendiente</th>
        <th>Servicios publicos pendientes</th>
        <th>Servicios pendientes</th>
        <th>NDNC pendiente</th>
        </tr>';

    foreach($mes_1 as $cuenta)
    {
        echo '<tr>';
            echo '<th>'.$cuenta["apartamento"].'</th>';
            echo '<th>'.$cuenta["factura"].'</th>';
            echo '<th>'.$controlador_cuentas->formatear_a_dinero($cuenta["pendiente"]).'</th>';
            echo '<th>'.$cuenta["int_pendiente"].'</th>';
            echo '<th>'.$cuenta["otros_pendiente"].'</th>';
            echo '<th>'.$cuenta["extra_pendiente"].'</th>';
            echo '<th>'.$cuenta["multa_pendiente"].'</th>';
            echo '<th>'.$cuenta["servicios_publicos_pendiente"].'</th>';
            echo '<th>'.$cuenta["servicios_pendiente"].'</th>';
            echo '<th>'.$cuenta["ndnc_pendiente"].'</th>';
        echo '</tr>';
    }
    echo '</table> </br> </br>';
    
    
    echo "Cuentas pendientes a 60 días</br>";
    echo '<table style="width:100%"><tr><th>Apartamento</th> 
        <th>Factura</th>
        <th>Pendiente</th>
        <th>Interes pendiente</th>
        <th>Otros peniente</th>
        <th>Extra pendiente</th>
        <th>Multa pendiente</th>
        <th>Servicios publicos pendientes</th>
        <th>Servicios pendientes</th>
        <th>NDNC pendiente</th>
        </tr>';

    foreach($mes_2 as $cuenta)
    {
        echo '<tr>';
            echo '<th>'.$cuenta["apartamento"].'</th>';
            echo '<th>'.$cuenta["factura"].'</th>';
            echo '<th>'.$controlador_cuentas->formatear_a_dinero($cuenta["pendiente"]).'</th>';
            echo '<th>'.$cuenta["int_pendiente"].'</th>';
            echo '<th>'.$cuenta["otros_pendiente"].'</th>';
            echo '<th>'.$cuenta["extra_pendiente"].'</th>';
            echo '<th>'.$cuenta["multa_pendiente"].'</th>';
            echo '<th>'.$cuenta["servicios_publicos_pendiente"].'</th>';
            echo '<th>'.$cuenta["servicios_pendiente"].'</th>';
            echo '<th>'.$cuenta["ndnc_pendiente"].'</th>';
        echo '</tr>';
    }
    echo '</table> </br> </br>';
    
    
    echo "Cuentas pendientes a 90 días o más</br>";
    echo '<table style="width:100%"><tr><th>Apartamento</th> 
        <th>Factura</th>
        <th>Pendiente</th>
        <th>Interes pendiente</th>
        <th>Otros peniente</th>
        <th>Extra pendiente</th>
        <th>Multa pendiente</th>
        <th>Servicios publicos pendientes</th>
        <th>Servicios pendientes</th>
        <th>NDNC pendiente</th>
        </tr>';

    foreach($mes_3 as $cuenta)
    {
        echo '<tr>';
            echo '<th>'.$cuenta["apartamento"].'</th>';
            echo '<th>'.$cuenta["factura"].'</th>';
            echo '<th>'.$controlador_cuentas->formatear_a_dinero($cuenta["pendiente"]).'</th>';
            echo '<th>'.$cuenta["int_pendiente"].'</th>';
            echo '<th>'.$cuenta["otros_pendiente"].'</th>';
            echo '<th>'.$cuenta["extra_pendiente"].'</th>';
            echo '<th>'.$cuenta["multa_pendiente"].'</th>';
            echo '<th>'.$cuenta["servicios_publicos_pendiente"].'</th>';
            echo '<th>'.$cuenta["servicios_pendiente"].'</th>';
            echo '<th>'.$cuenta["ndnc_pendiente"].'</th>';
        echo '</tr>';
    }
    echo '</table> </br> </br>';
    
    
    /*
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
    
    
        foreach ($cuentas as $cuenta) {
            echo '<tr>';
                echo '<th>';
                    foreach ($edificios as $key) {
                        if($cuenta["edificio"] == $key["id"]){
                            echo ($key["nombre"]);
                        }
                    }
                    
                echo '</th>';
            
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

<?php
    */
}

 ?>
</body>
