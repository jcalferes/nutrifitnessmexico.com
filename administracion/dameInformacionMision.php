<?php
include '../daoconexion/daoConeccion.php';
$cn = new coneccion();
$sql = "SELECT mision FROM mision";
$datos = mysql_query($sql, $cn->Conectarse());
if ($datos == false) {
    
} else {
    echo '<table  
        class="table table-hover"
        id="tablaMision">'
    . '<thead>'
    . '<th>Misión</th>'
    . '<th>Actualizar</th>'
    . '</thead>';
    while ($rs = mysql_fetch_array($datos)) {
        ?>
        <tr>
            <td>
                <span id="sMision"><?php echo $rs["mision"];?></span>
                
            </td>
            <td>
        <center>
            <a href="#" onclick="dameMision();"> <i class="fa fa-refresh fa-2x"></i></a>
        </center>
        </td>
        </tr>
        <?php
    } echo '</table>';
}
?>
