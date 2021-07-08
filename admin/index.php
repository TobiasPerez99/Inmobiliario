<?php


$resultado = $_GET['resultado'] ?? null;
var_dump($resultado);

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
</main>

<?php incluirTemplate('footer'); ?>