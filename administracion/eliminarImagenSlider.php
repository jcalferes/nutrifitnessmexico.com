<?php
include '../daoconexion/daoConeccion.php';
$cn = new coneccion();
$imagen = $_GET["info"];
if (is_file("../images/slider/" .$imagen)) {
    chmod("../images/slider/" . $imagen, 0777);
    if (!unlink("../images/slider/" . $imagen)) {
        echo "No se elimino";
    }
}
$sql = "DELETE FROM slider WHERE imagen ='" . $imagen . "'";
$datos = mysql_query($sql, $cn->Conectarse());
if ($datos == false) {
    echo mysql_error();
} else {
    echo "Imagen eliminada Satisfactoriamente";
}