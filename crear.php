<?php

include("conexion.php");
include("funciones.php");
if($_POST["operacion"] == "crear"){
    $imagen = '';
    if ($_FILES["imagen_estudiante"]["name"] != '') {
        $imagen = subir_imagen();
    }
    $stmt = $conexion->prepare("INSERT INTO estudiantes(codigo_estudiante, nombre_estudiante, apellidos_estudiante, fecha_nacimiento_estudiante, imagen)VALUES(:codigo_estudiante, :nombre, :apellidos, :fecha_nacimiento_estudiante, :imagen)");

    $resultado = $stmt->execute(
        array(
            ':codigo_estudiante'  => $_POST["codigo_estudiante"],
            ':nombre'  => $_POST["nombre"],
            ':apellidos'  => $_POST["apellidos"],
            ':fecha_nacimiento_estudiante'  => $_POST["fecha_nacimiento_estudiante"],
            ':imagen' => $imagen,
           

        )
        );
        if(!empty($resultado)){
            echo'Registro creado';
        }
}




?>