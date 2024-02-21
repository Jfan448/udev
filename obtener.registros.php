<?php

include("conexion.php");
include("funciones.php");

$query = "";
$salida = array();
$query = "SELECT * FROM carreras ";


if(isset($_POST["search"]["value"])){

    $query .= 'WHERE nombre_carrera LIKE "%' . $_POST["search"]["value"] . '%" ';
}
if(isset($_POST["order"])){

    $query .= 'ORDER BY ' . $_POST['order']['0']['column'] . ' ' .
    $_POST["order"][0]['dir'] . ' ';

}else {
    $query .= 'ORDER BY codigo_carrera DESC ';
}

if($_POST['length'] != -1){
    $query .= 'LIMIT ' . ($_POST["start"]) . ',' . $_POST["length"];
}















?>