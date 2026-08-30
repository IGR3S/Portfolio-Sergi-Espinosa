<?php

function obtenerProyectos(PDO $conexion): array
{
    $sql = "
        SELECT
            p.id_proyecto,
            p.nombre,
            p.tipo,
            p.texto,
            p.imagen,
            GROUP_CONCAT(t.nombre ORDER BY t.nombre SEPARATOR '||') AS tecnologias
        FROM proyectos p
        LEFT JOIN proyecto_tecnologia pt
            ON pt.id_proyecto = p.id_proyecto
        LEFT JOIN tecnologias t
            ON t.id_tecnologia = pt.id_tecnologia
        GROUP BY
            p.id_proyecto,
            p.nombre,
            p.tipo,
            p.texto,
            p.imagen,
            p.orden_visual
        ORDER BY p.orden_visual ASC, p.id_proyecto ASC
    ";

    $stmt = $conexion->prepare($sql);
    $stmt->execute();

    $proyectos = $stmt->fetchAll();

    foreach ($proyectos as &$proyecto) {
        $proyecto['tech'] = $proyecto['tecnologias']
            ? explode('||', $proyecto['tecnologias'])
            : [];

        unset($proyecto['tecnologias']);
    }

    return $proyectos;
}