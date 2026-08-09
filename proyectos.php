<?php
$pageTitle = 'Proyectos | Sergi Espinosa';
require_once 'templates/header.php';
$projects = [
    ['nombre' => 'Nexo Studio', 'tipo' => 'Web corporativa', 'texto' => 'Una presencia digital sobria y flexible para un estudio creativo.', 'tech' => ['Figma', 'HTML', 'CSS']],
    ['nombre' => 'Aula Abierta', 'tipo' => 'Plataforma educativa', 'texto' => 'Un espacio de aprendizaje claro, accesible y fácil de recorrer.', 'tech' => ['UX/UI', 'PHP', 'JavaScript']],
    ['nombre' => 'Café Marea', 'tipo' => 'E-commerce', 'texto' => 'Una tienda online cálida, directa y centrada en el producto.', 'tech' => ['Shopify', 'Diseño', 'SEO']],
    ['nombre' => 'Línea Norte', 'tipo' => 'Identidad & web', 'texto' => 'Una identidad visual contemporánea trasladada a un portfolio digital.', 'tech' => ['Branding', 'Figma', 'Web']],
    ['nombre' => 'Atempo', 'tipo' => 'Aplicación web', 'texto' => 'Una herramienta sencilla para organizar proyectos y equipos.', 'tech' => ['UX/UI', 'React', 'API']],
    ['nombre' => 'Terra', 'tipo' => 'Landing page', 'texto' => 'Una landing con ritmo visual para presentar una nueva marca.', 'tech' => ['HTML', 'CSS', 'Motion']],
];
?>

<section class="page-heading container">
    <p class="eyebrow eyebrow-purple">Selección de trabajos</p>
    <h1>Proyectos que<br>cuentan historias.</h1>
    <p>Una muestra de propuestas digitales, identidades y experiencias creadas con intención.</p>
</section>

<section class="projects container">
    <?php foreach ($projects as $index => $project): ?>
        <article class="project-card">
            <div class="project-image project-image-<?= $index % 3 ?>">
                <img src="static/img/banner_tecnologias.png" alt="Vista previa del proyecto <?= htmlspecialchars($project['nombre'], ENT_QUOTES, 'UTF-8') ?>">
                <span><?= sprintf('%02d', $index + 1) ?></span>
            </div>
            <div class="project-content">
                <p class="project-type"><?= htmlspecialchars($project['tipo'], ENT_QUOTES, 'UTF-8') ?></p>
                <h2><?= htmlspecialchars($project['nombre'], ENT_QUOTES, 'UTF-8') ?></h2>
                <p><?= htmlspecialchars($project['texto'], ENT_QUOTES, 'UTF-8') ?></p>
                <div class="tech-list">
                    <?php foreach ($project['tech'] as $tech): ?><span><?= htmlspecialchars($tech, ENT_QUOTES, 'UTF-8') ?></span><?php endforeach; ?>
                </div>
            </div>
        </article>
    <?php endforeach; ?>
</section>

<?php require_once 'templates/footer.php'; ?>
