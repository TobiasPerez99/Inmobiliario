<?php

require 'includes/funciones.php';

incluirTemplate('header');

?>

<main class="contenedor seccion contenido-centrado">
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
    <article class="entrada-blog">
        <div class="imagen">
            <picture>
                <source srcset="build/img/blog3.webp" type="image/webp">
                <source srcset="build/img/blog3.jpg" type="image/jpeg">
                <img src="build/img/blog3.jpg" alt="Text Entrada Blog">
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
                <source srcset="build/img/blog4.webp" type="image/webp">
                <source srcset="build/img/blog4.jpg" type="image/jpeg">
                <img src="build/img/blog4.jpg" alt="Text Entrada Blog">
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
</main>

<?php incluirTemplate('footer'); ?>