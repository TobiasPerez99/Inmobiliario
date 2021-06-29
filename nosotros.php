<?php

require 'includes/funciones.php';

incluirTemplate('header');

?>

<main class="contenedor seccion">
    <h1>Conoce Sobre Nosotros</h1>

    <div class="contenido-nosotros">
        <div class="imagen">
            <picture>
                <source srcset="build/img/nosotros.webp" type="image/webp">
                <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                <img loading='lazy' src="build/img/nosotros.jpg" alt="Sobre nosotros">
            </picture>
        </div>

        <div class="nosotros">
            <blockquote>
                25 años de Experiencia
            </blockquote>

            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quo praesentium fuga dolores excepturi. Aliquam quo molestiae beatae excepturi ullam. Vero, eaque. Necessitatibus ipsa minima magni! Repellendus fugiat eius dignissimos optio.</p>

            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis eaque modi accusamus, temporibus optio quam </p>

        </div>

    </div>
</main>

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
            <h3>Tiempo</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus dolorem quibusdam asperiores ab nesciunt explicabo, reiciendis sit facere iste pariatur autem labore delectus molestiae, totam omnis qui, ipsum reprehenderit? Reprehenderit?</p>
        </div>
    </div>

</main>

<?php incluirTemplate('footer'); ?>