<?php

function obtener_todos_registros (){
    include('conexion.php');
    $stmt = $conexion->prepare("SELECT * FROM carreras");
    $stmt ->execute();
    $resutlado = $stmt->fetchAll();
    return $stmt ->rowCount();

}


?>