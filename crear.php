<?php

include("conexion.php");
include("funciones.php");
if($_POST["operacion"] == "crear"){
    
    $stmt = $conexion->prepare("INSERT INTO carreras(nombre_carrera, descripcion_carrera, valor_total, estado)VALUES(:nombre_carrera, :descripcion_carrera, :valor_total, :estado)");
    $resultado = $stmt->execute(
        array(
            ':nombre_carrera'  => $_POST["nombre_carrera"],
            ':descripcion_carrera'  => $_POST["descripcion_carrera"],
            ':valor_total'  => $_POST["valor_total"],
            ':estado'  => $_POST["estado"]
        )
        );
        if(!empty($resultado)){
            echo'Registro creado';
        }
}




?>