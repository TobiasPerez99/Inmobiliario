<?php

require '../../includes/funciones.php';

incluirTemplate('header');

?>

<main class="contenedor seccion">
    <h1>Crear</h1>



    <form action="" class="formulario">
        <fieldset>
            <legend>Informacion General de Nuestra Propiedad</legend>

            <label for="titulo">Titulo: </label>
            <input type="text" id="titulo" placeholder="Titulo Propiedad">

            <label for="precio">Precio: </label>
            <input type="number" id="precio" placeholder="Precio de la Propiedad">

            <label for="imagen">Imagen: </label>
            <input type="file" id="imagen" accept="image/jpeg , image/png">

            <label for="descripcion">Descripcion</label>
            <textarea name="" id="descripcion" cols="30" rows="10"></textarea>
        </fieldset>

        <fieldset>
            <legend>Informacion de la Propiedad</legend>

            <label for="habitaciones">Habitaciones: </label>
            <input type="number" id="habitaciones" placeholder="Cantidad de Habitaciones">

            <label for="estacionamiento">Estacionamiento: </label>
            <input type="number" id="estacionamiento" placeholder="Cantidad de Estacionamientos ">

            <label for="wc">Baños: </label>
            <input type="number" id="wc" placeholder="Cantidad de wc">
        </fieldset>

        <fieldset>
            <legend>Vendedor</legend>
            <select name="" id="">
                <option value="1">Juan</option>
                <option value="2">Julian</option>
            </select>
        </fieldset>



    </form>

    <a href="/admin/index.php" class="boton-verde">Volver</a>
</main>

<?php incluirTemplate('footer'); ?>