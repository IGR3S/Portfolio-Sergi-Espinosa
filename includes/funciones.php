<?php
function obtenerProyectos($conexion){

    $sql = "SELECT p.id_proyecto, p.nombre_proyecto
    FROM tartas t;";
    $stmt = $conexion->prepare($sql);
    $stmt->execute();
    $resultado = $stmt->fetchAll();
    return $resultado;
}

?>
