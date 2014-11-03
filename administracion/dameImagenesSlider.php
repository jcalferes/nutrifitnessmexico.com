<?php
include '../daoconexion/daoConeccion.php';
$cn = new coneccion();
$sql = "SELECT * FROM slider";
$datos = mysql_query($sql, $cn->Conectarse());

if ($datos == false) {
    echo "<table>"
    . "<tr><td> " . mysql_error() . "</td></tr>"
    . "</table>";
} else {
    echo ' <div class="gallery-content">';
    while ($rs = mysql_fetch_array($datos)) {
        ?>
        <div class="col-md-3 col-sm-4">
            <div class="element">
                <img class="img-responsive img-thumbnail" src="../<?php echo $rs["ruta"]; ?>" alt=""/>
                <span class="gallery-img-hover"></span>
                <a href="../<?php echo $rs["ruta"]; ?>" class="gallery-img-link">
                    <i class="fa fa-search-plus hover-icon icon-left"></i>
                </a>
                <!--<a onclick="eliminarImagen(<?php echo $rs["imagen"]; ?>)">-->
                <?php echo "  <a href='#' onclick='eliminarImagen(" . "\"$rs[1]\"" . ")'> ";?>
                <i class="fa fa-trash hover-icon icon-right" title="Eliminar Foto del Slider"></i>
                </a>
            </div> 
        </div>
        <?php
    }
    echo '</div>';
}