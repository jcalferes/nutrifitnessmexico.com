<?php

include './daoconexion/daoConeccion.php';
$cn = new coneccion();

$cn->Conectarse();
$sql = "SELECT * FROM slider";
$result = mysql_query($sql);

$arr = array();
$contador = 0;

while ($rs = mysql_fetch_array($result)) {
    $arr['data'][$contador] = array('img' => $rs["imagen"]);
    $contador++;
}

echo "imagenes: " . json_encode($arr['data']);

//==============================================================================
//$outp = "[";
//while ($rs = mysql_fetch_array($result)) {
//    if ($outp != "[") {
//        $outp .= ",";
//    }
//    $outp .= '{"name":"' . $rs["imagen"] . '"}';
//}
//$outp .="]";
//echo $outp;
//echo json_encode($array);
