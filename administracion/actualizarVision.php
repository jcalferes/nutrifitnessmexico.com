<?php
include '../daoconexion/daoConeccion.php';
$cn = new coneccion();
$sql ="UPDATE mision set vision = '".$_GET["info"]."'";
$datos = mysql_query($sql, $cn->Conectarse());
if($datos == false){
    echo mysql_error();
}
else{
    echo 'Exito Vision actualizada';
}