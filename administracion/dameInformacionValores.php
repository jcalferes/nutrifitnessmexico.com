<?php

include '../daoconexion/daoConeccion.php';
$cn = new coneccion();
$sql = "SELECT valores FROM mision";
$datos = mysql_query($sql, $cn->Conectarse());
if ($datos == false) {
    
} else {
    echo '<table>'
    . '<thead>'
    . '<th>Valores</th>'
    . '<th>Actualizar</th>'
    . '</thead>';
    while ($rs = mysql_fetch_array($datos)) {
        ?>
        <tr>
            <td>
                <span id="sValores"><?php echo $rs["valores"];?></span>
                
            </td>
            <td>
        <center>
            <a href="#" onclick="dameValores();"> <i class="fa fa-refresh fa-2x"></i></a>
        </center>
        </td>
        </tr>
        <?php
    } echo '</table>';
   
}
?>