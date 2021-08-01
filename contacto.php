<?php

require 'includes/app.php';

incluirTemplate('header');

?>

<main class="contenedor seccion">

    <h1>Contacto</h1>

    <picture>
        <source srcset="build/img/destacada.webp" type="image.webp">
        <source srcset="build/img/destacada.jpg" type="image.jpeg">
        <img loading='lazy' src="build/img/destacada.jpg" alt="">
    </picture>


    <form action="" class="formulario">

        <fieldset>
            <legend>Informacion Personal</legend>
            <label for="nombre">Nombre:</label>
            <input type="text" placeholder="Tu Nombre" id="nombre">

            <label for="Email">Email:</label>
            <input type="email" placeholder="Tu Email" id="email">

            <label for="telefono">Telefono:</label>
            <input type="tel" placeholder="Tu telefono" id="telefono">

            <label for="mensaje">Mensaje:</label>
            <textarea name="" id="mensaje"></textarea>
        </fieldset>

        <fieldset>
            <legend>Informacion Sobre la Propiedad</legend>

            <label for="">Vender o Comprar</label>
            <select name="" id="opciones">
                <option value="" disabled selected>--Seleccione--</option>
                <option value="Compra">Compra</option>
                <option value="Vende">Vende</option>
            </select>

            <label for="presupuesto">Precio o Presupuesto</label>
            <input type="number" placeholder="Tu precio o Presupuesto">
        </fieldset>
        <fieldset>
            <legend>Informacion sobre la Propiedad</legend>

            <p>Como desea ser contactado</p>

            <div class="forma-contacto">
                <label for="contactar-telefono"> Telefono</label>
                <input name="contacto" type="radio" value="telefono" id="contactar-telefono">

                <label for="contactar-email"> email</label>
                <input name="contacto" type="radio" value="email" id="contactar-email">
            </div>
            <p>Si eligio telefono elija la fecha y la hora en la que desea ser contactado</p>

            <label for="fecha">fecha:</label>
            <input type="date" name="" id="fecha">

            <label for="mensaje">Hora:</label>
            <input type="time" name="" id="mensaje" min="09:00" max="18:00">


        </fieldset>

        <input type="submit" value="enviar" class="boton-verde">

    </form>


</main>

<?php incluirTemplate('footer'); ?>