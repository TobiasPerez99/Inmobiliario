<?php






//MUestra mensaje condicional

$resultado = $_GET['resultado'] ?? null;


//incluye template
require '../includes/funciones.php';

incluirTemplate('header');

?>

<main class="contenedor seccion">
    <h1>Administrador de Inmobiliaria</h1>

    <?php if (intval($resultado) == 1) : ?>
        <p class="alerta exito" style="padding: .5rem;text-align:  center;color: white;font-weight: 700;text-transform: uppercase;margin: 1rem 0 ; background-color:rgb(54, 161, 54)">Anuncio creado correctamente</p>
    <?php endif; ?>

    <a href="/admin/propiedades/crear.php" class="boton-verde">Crear Nueva Propiedad</a>
    <a href="/admin/propiedades/actualizar.php" class="boton-verde">Actualizar Nueva Propiedad</a>
    <a href="/admin/propiedades/borrar.php" class="boton-verde">Eliminar Nueva Propiedad</a>


<table class="propiedades">

    <thead>
        <tr>
            <th>Id</th>
            <th>Titulo</th>
            <th>Imagen</th>
            <th>Precio</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Casa en la playa</td>
            <td><img class="imagen-tabla" src="/imagenes/17a57be3e2e65e007788707d50f4558e.jpg" alt=""></td>
            <td>1.000.000</td>
            <td>
                <a class="boton-rojo-block" href="">Eliminar</a>
                <a class="boton-verde-block" href="">Actualizar</a>
            </td>
        </tr>
    </tbody>

</table>


</main>

<?php incluirTemplate('footer'); ?>