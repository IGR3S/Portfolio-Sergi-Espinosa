<?php
$pageTitle = $pageTitle ?? 'Sergi Espinosa | Portfolio';
$currentPage = basename($_SERVER['PHP_SELF']);
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Portfolio de Sergi Espinosa, diseñador y desarrollador web.">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
    <link rel="icon" type="image/png" href="static/img/Logo.png">
    <link rel="stylesheet" href="static/css/estilo.css">
</head>
<body>
    <header class="site-header">
        <div class="header-inner">
            <a class="brand" href="index.php" aria-label="Ir a la página de inicio">
                <img class="logo" src="static/img/Logo.png" alt="Logo de Sergi Espinosa">
            </a>
            <button class="menu-toggle" type="button" aria-label="Abrir menú" aria-expanded="false" aria-controls="main-menu">
                <span></span><span></span><span></span>
            </button>
            <nav id="main-menu" class="main-nav" aria-label="Navegación principal">
                <a class="<?= $currentPage === 'index.php' ? 'active' : '' ?>" href="index.php">Inicio</a>
                <a class="<?= $currentPage === 'proyectos.php' ? 'active' : '' ?>" href="proyectos.php">Proyectos</a>
                <a class="<?= $currentPage === 'contacto.php' ? 'active' : '' ?>" href="contacto.php">Contacto</a>
            </nav>
        </div>
    </header>
    <main>
