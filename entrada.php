<?php include 'includes/templates/header.php' ?>

<main class="contenedor seccion contenido-centrado">
    <h1>Casa en venta frente al bosque</h1>

    <picture>
        <source srcset="build/img/destacada.webp" type="image.webp">
        <source srcset="build/img/destacada.jpg" type="image.jpeg">
        <img loading='lazy' src="build/img/destacada.jpg" alt="">
    </picture>

    <div class="resumen-propiedad">

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi aspernatur doloribus veritatis facilis amet maiores. Similique quam, officiis ex sit natus exercitationem eveniet quos expedita ut ratione voluptatem, perspiciatis laboriosam?</p>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, placeat ullam. Vero dolor porro nulla nostrum illo exercitationem a eveniet sint quam, adipisci, perferendis alias esse tempora consequuntur vitae optio.</p>
    </div>

</main>
<footer class="footer seccion">

    <div class="contenedor contenedor-footer">
        <nav class="navegacion">
            <a href="nosotros.php">Nosotros</a>
            <a href="anuncios.php">Anuncios</a>
            <a href="blog.php">Blog</a>
            <a href="contacto.php">Contacto</a>
        </nav>
    </div>

    <p class="copyright">Todos los derechos reservados &copy;</p>

</footer>


<script src="build/js/bundle.min.js"></script>
</body>

</html>