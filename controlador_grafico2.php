<?php
    require 'modelo_grafico.php';

    $MG = new Modelo_Grafico2();
    $consulta = $MG -> TraerDatosGraficoLine();
    echo json_encode($consulta);
?>