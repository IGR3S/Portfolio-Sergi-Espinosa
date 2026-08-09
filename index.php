<?php
$pageTitle = 'Inicio | Sergi Espinosa';
require_once 'templates/header.php';
?>

<section class="hero">
    <img src="static/img/banner_tecnologias.png" alt="Tecnologías digitales" class="hero-image">
    <div class="hero-overlay"></div>
    <div class="hero-content container">
        <p class="eyebrow">Portfolio · 2026</p>
        <h1>Diseño experiencias digitales<br>que conectan.</h1>
        <p>Diseño y desarrollo web con una mirada clara, funcional y humana.</p>
        <a class="button button-light" href="proyectos.php">Ver proyectos <span aria-hidden="true">→</span></a>
    </div>
</section>

<section class="intro container section-space">
    <div class="intro-copy">
        <p class="eyebrow eyebrow-purple">Sobre mí</p>
        <h2>Ideas sencillas.<br>Resultados memorables.</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur a nunc neque. Creo soluciones visuales que equilibran identidad, claridad y una buena experiencia de uso.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cada proyecto se construye escuchando, investigando y cuidando los detalles que hacen que una idea destaque.</p>
    </div>
    <div class="intro-visuals" aria-label="Espacio reservado para imágenes de presentación">
        <div class="image-placeholder image-one"><span>01</span></div>
        <div class="image-placeholder image-two"><span>02</span></div>
    </div>
</section>

<section class="services section-space">
    <div class="container">
        <p class="eyebrow eyebrow-purple">Lo que hago</p>
        <div class="service-list">
            <article class="service-item">
                <span class="service-number">01</span>
                <div><h3>Diseño web</h3><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Una web pensada para comunicar con claridad y ofrecer una navegación natural en cada pantalla.</p></div>
                <div class="service-art art-purple" aria-hidden="true"></div>
            </article>
            <article class="service-item reversed">
                <span class="service-number">02</span>
                <div><h3>Identidad visual</h3><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sistemas visuales coherentes que dan personalidad a las marcas y las hacen reconocibles.</p></div>
                <div class="service-art art-dark" aria-hidden="true"></div>
            </article>
            <article class="service-item">
                <span class="service-number">03</span>
                <div><h3>Desarrollo a medida</h3><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Experiencias ágiles y accesibles, creadas con la tecnología adecuada para cada necesidad.</p></div>
                <div class="service-art art-grid" aria-hidden="true"></div>
            </article>
        </div>
    </div>
</section>

<?php require_once 'templates/footer.php'; ?>
