<?php 

    require'includes/funciones.php';

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
    <div class="contenedor-anuncio">
        <!-- Inicio Propiedad Nro 1  -->
        <div class="anuncio">
            <picture>
                <source srcset="build/img/anuncio1.webp" type="imagen/webp">
                <source srcset="build/img/anuncio1.jpg" type="imagen/jpeg">
                <img loading="lazy" src="build/img/anuncio1.jpg" alt="anuncio1">
            </picture>


            <div class="contenido-anuncio">
                <h3>Casa con vista al lago</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi rerum deleniti iusto sint</p>
                <p class="precio">$3.000.000,00</p>

                <ul class="iconos-caracteristicas">
                    <li>
                        <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="">
                        <p>3</p>
                    </li>
                    <li>
                        <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="">
                        <p>2</p>
                    </li>
                    <li>
                        <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="">
                        <p>4</p>
                    </li>

                </ul>
                <a href="anuncios.php" class="boton boton-amarillo-block">Ver Propiedad</a>
            </div>


        </div>
        <!-- Fin Propiedad Nro 1  -->
        <div class="anuncio">
            <picture>
                <source srcset="build/img/anuncio1.webp" type="imagen/webp">
                <source srcset="build/img/anuncio1.jpg" type="imagen/jpeg">
                <img loading="lazy" src="build/img/anuncio2.jpg" alt="anuncio1">
            </picture>

            <!-- Inicio Propiedad nro2 -->

            <div class="contenido-anuncio">
                <h3>Casa con vista al lago</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi rerum deleniti iusto sint</p>
                <p class="precio">$3.000.000,00</p>

                <ul class="iconos-caracteristicas">
                    <li>
                        <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="">
                        <p>3</p>
                    </li>
                    <li>
                        <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="">
                        <p>2</p>
                    </li>
                    <li>
                        <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="">
                        <p>4</p>
                    </li>

                </ul>
                <a href="anuncios.php" class="boton boton-amarillo-block">Ver Propiedad</a>
            </div>
        </div>

        <!-- Fin Propiedad nro2 -->
        <!-- Inicio Propiedad nro3 -->
        <div class="anuncio">
            <picture>
                <source srcset="build/img/anuncio1.webp" type="imagen/webp">
                <source srcset="build/img/anuncio1.jpg" type="imagen/jpeg">
                <img loading="lazy" src="build/img/anuncio3.jpg" alt="anuncio1">
            </picture>


            <div class="contenido-anuncio">
                <h3>Casa con vista al lago</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi rerum deleniti iusto sint</p>
                <p class="precio">$3.000.000,00</p>

                <ul class="iconos-caracteristicas">
                    <li>
                        <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="">
                        <p>3</p>
                    </li>
                    <li>
                        <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="">
                        <p>2</p>
                    </li>
                    <li>
                        <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="">
                        <p>4</p>
                    </li>

                </ul>
                <a href="anuncios.php" class="boton boton-amarillo-block">Ver Propiedad</a>
            </div>
        </div>
        <!-- Fin de propiedad nro 3 -->
    </div>

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
            <p>- Tobias Leonel Perez</p>
        </div>
    </section>
</div>

<?php incluirTemplate('footer'); ?>
