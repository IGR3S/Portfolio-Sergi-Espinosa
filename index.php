<?php
$pageTitle = 'Inicio | Sergi Espinosa';
require_once 'templates/header.php';
?>

<section class="hero">
    <img src="static/img/banner_tecnologias.png" alt="Tecnologías digitales" class="hero-image">
    <div class="hero-overlay"></div>
    <div class="hero-content container">
        <p class="eyebrow">Sergi Espinosa Belén · Portfolio · 2026</p>
        <h1>Diseño experiencias digitales<br>que conectan.</h1>
        <p>2 años de experiencia con una vision clara, funcional y llamativa.</p>
        <a class="button button-light" href="proyectos.php">Ir a proyectos <span aria-hidden="true">→</span></a>
    </div>
</section>

<section class="intro container section-space">
    <div class="intro-copy">
        <p class="eyebrow eyebrow-purple">Estudios</p>
        <h2>Estudios realizados.</h2>
        <p>Grado superior en Animaciones 3D, Juegos y Entornos Interactivos en el IES Paco Ruiz (2021-2023), el cual me dota de conocimientos en Blender, aplicaciones como ADOBE Photoshop, Premiere, Illustrator y After Effects para la edicion de fotos y videos.</p>
        <p>Grado superior en Desarrollo de Aplicaciones Web en el IES Maciá Abela (2024-2026), gracias al cual tengo conocimientos avanzados de edición de paginas web en Wordpress Elementor, como en HTML, CSS y PHP. Tanto con la ayuda de IA como sin ella.</p>
    </div>
    <div class="skills-visuals" aria-label="Nivel de conocimientos">
    <div class="skill" style="--level: 85;">
        <img src="static/img/blender.png" alt="Blender">
        <span class="skill-level">85%</span>
    </div>

    <div class="skill" style="--level: 70;">
        <img src="static/img/adobe.png" alt="Adobe">
        <span class="skill-level">70%</span>
    </div>

    <div class="skill" style="--level: 70;">
        <img src="static/img/php.png" alt="PHP">
        <span class="skill-level">70%</span>
    </div>

    <div class="skill" style="--level: 90;">
        <img src="static/img/wordpress.png" alt="WordPress">
        <span class="skill-level">90%</span>
    </div>
</div>
</section>

<section class="services section-space">
    <div class="container">
        <p class="eyebrow eyebrow-purple">Experiencia laboral</p>
        <div class="service-list">
            <article class="service-item">
                <span class="service-number">2023</span>
                <div><h3>Revuelo Creativo</h3><p>Realizador y editor de video y fotografia para Revuelo Creativo.</p></div>
                <img class="service-art" src="static/img/iconoRevuelo.jpg" alt="Revuelo">
            </article>
            <article class="service-item reversed">
                <span class="service-number">2025</span>
                <div><h3>Savour</h3><p>Diseño y desarrollo de páginas web para Savour. Utilicé tambien Lightroom para optimizar las webs y mejorar la accesibilidad visual de los sitios.</p></div>
                <img class="service-art" src="static/img/iconoSavour.png" alt="Savour">
            </article>
            <article class="service-item">
                <span class="service-number">2026</span>
                <div><h3>Enercoop</h3><p>Diseño y desarrollo de páginas web para Enercoop mediante WordPress y Elementor, creando una experiencia clara, funcional y adaptable.</p></div>
                <img class="service-art" src="static/img/iconoEnercoop.jpg" alt="Enercoop">
            </article>
        </div>
    </div>
</section>

<?php require_once 'templates/footer.php'; ?>
