    </main>
    <footer class="site-footer">
        <div class="footer-inner">
            <section>
                <p class="footer-kicker">Hablemos</p>
                <h2>¿Tienes un proyecto en mente?</h2>
                <a class="footer-email" href="mailto:sergiesbe@gmail.com">sergiesbe@gmail.com</a>
                <a class="text-link" href="contacto.php">Ir al formulario de contacto <span aria-hidden="true">→</span></a>
            </section>
            <section class="footer-social" aria-label="Redes sociales">
                <p class="footer-kicker">Redes</p>
                <a href="#" aria-label="LinkedIn (próximamente)">LinkedIn <span aria-hidden="true">↗</span></a>
                <a href="#" aria-label="GitHub (próximamente)">GitHub <span aria-hidden="true">↗</span></a>
                <a href="#" aria-label="X (próximamente)">X / Twitter <span aria-hidden="true">↗</span></a>
            </section>
        </div>
        <div class="footer-bottom">© <?= date('Y') ?> Sergi Espinosa. Todos los derechos reservados.</div>
    </footer>
    <script>
        const toggle = document.querySelector('.menu-toggle');
        const menu = document.querySelector('.main-nav');
        toggle?.addEventListener('click', () => {
            const isOpen = menu.classList.toggle('is-open');
            toggle.setAttribute('aria-expanded', isOpen);
            toggle.setAttribute('aria-label', isOpen ? 'Cerrar menú' : 'Abrir menú');
        });
    </script>
</body>
</html>
