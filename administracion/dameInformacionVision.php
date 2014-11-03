<?php
include '../daoconexion/daoConeccion.php';
$cn = new coneccion();
$sql = "SELECT vision FROM mision";
$datos = mysql_query($sql, $cn->Conectarse());
if ($datos == false) {
    
} else {
    echo '<table>'
    . '<thead>'
    . '<th>Visión</th>'
    . '<th>Actualizar</th>'
    . '</thead>';
    while ($rs = mysql_fetch_array($datos)) {
        ?>
        <tr>
            <td>
                <span id="sVision"><?php echo $rs["vision"]; ?></span>

            </td>
            <td>
        <center>
            <a href="#" onclick="dameVision();"> <i class="fa fa-refresh fa-2x"></i></a>
        </center>
        </td>
        </tr>
        <?php
    } echo '</table>';
}
?>