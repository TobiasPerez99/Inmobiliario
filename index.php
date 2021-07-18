<?php

require 'includes/funciones.php';
incluirTemplate('header');

?>

<main class="contenedor seccion">

    <h1>Mas sobre nosotros</h1>

    <div class="iconos-nosotros">
        <div class="icono">
            <img src="build/img/icono1.svg" alt="icono seguridad" loading="lazy">
            <h3>Seguridad</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus dolorem quibusdam asperiores ab nesciunt explicabo, reiciendis sit facere iste pariatur autem labore delectus molestiae, totam omnis qui, ipsum reprehenderit? Reprehenderit?</p>
        </div>
        <div class="icono">
            <img src="build/img/icono2.svg" alt="icono seguridad" loading="lazy">
            <h3>Precio</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus dolorem quibusdam asperiores ab nesciunt explicabo, reiciendis sit facere iste pariatur autem labore delectus molestiae, totam omnis qui, ipsum reprehenderit? Reprehenderit?</p>
        </div>
        <div class="icono">
            <img src="build/img/icono3.svg" alt="icono seguridad" loading="lazy">
            <h3>Julian hermoso</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus dolorem quibusdam asperiores ab nesciunt explicabo, reiciendis sit facere iste pariatur autem labore delectus molestiae, totam omnis qui, ipsum reprehenderit? Reprehenderit?</p>
        </div>
    </div>

</main>

<section class="seccion contenedor">
    <h2>Casas y Departamentos en Venta</h2>

    <?php

    $limite = 3;

    include 'includes/templates/anuncios.php';

    ?>

    <div class="alinear-derecha">
        <a href="anuncios.php" class="boton-verde">Ver Todas</a>
    </div>
</section>

<section class="imagen-contacto">
    <h2>encuentra la casa de tus sueños</h2>
    <p>Completa el formulario y un asesor se pondra en contracto contigo a la brevedad.</p>
    <a href="contacto.php" class="boton-amarillo">Contactanos</a>
</section>

<div class="contenedor seccion seccion-inferior">
    <section class="blog">
        <h3>Nuestro Blog</h3>
        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog1.webp" type="image/webp">
                    <source srcset="build/img/blog1.jpg" type="image/jpeg">
                    <img src="build/img/blog1.jpg" alt="Text Entrada Blog">
                </picture>
            </div>
            <div class="texto-entrada">
                <a href="entrada.php">
                    <H4>Terraza en el techo de tu casa</H4>
                    <p>Escrito el <span>14/06/2021</span>Por <span>Admin</span></p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta quasi aliquam esse asperiores distinctio at officiis corporis.</p>
                </a>
            </div>
        </article>
        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog2.webp" type="image/webp">
                    <source srcset="build/img/blog2.jpg" type="image/jpeg">
                    <img src="build/img/blog2.jpg" alt="Text Entrada Blog">
                </picture>
            </div>
            <div class="texto-entrada">
                <a href="entrada.php">
                    <H4>Terraza en el techo de tu casa</H4>
                    <p>Escrito el <span>14/06/2021</span>Por <span>Admin</span></p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta quasi aliquam esse asperiores distinctio at officiis corporis.</p>
                </a>
            </div>
        </article>
    </section>

    <section class="testimoniales">
        <h3>Testimoniales</h3>
        <div class="testimonial">
            <blockquote>Lorem ipsum, dolor sit amet consectetur adipisicing elit. </blockquote>
            <p>- Tobias Leonel</p>
        </div>
    </section>
</div>

<?php incluirTemplate('footer'); ?>