<?php

include '../daoconexion/daoConeccion.php';
$cn = new coneccion();
$sql = "SELECT * FROM tiposDePago";
$rs = mysql_query($sql, $cn->Conectarse());
if ($rs == false) {
    echo '<table>'
    . '<tr>' . mysql_error() . '</tr>'
    . '</table>';
} else {
    echo '<table class="table table-hover"
       id="tablaTiposPagos">';
    echo '<thead>'
    . 'Tipos Pagos'
    . 'Actualizar'
    . 'Status'
    . '</thead>';
    while ($datos = mysql_fetch_array($rs)) {
       
        echo '<tr>'
        . '<td>' . $datos["tipo"] . '</td>';
         if ($datos ["status"] == 1) {
             echo "<td><i class='fa fa-2x fa-thumbs-up'></i></td>";
        } else {
            $da = "<i class='fa fa-camera-retro'></i>";
        }
        echo '</tr>';
    }

    echo '</table>';
}