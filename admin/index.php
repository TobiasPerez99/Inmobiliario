<?php

require '../includes/funciones.php';

incluirTemplate('header');

?>

<main class="contenedor seccion">
    <h1>Administrador de Inmobiliaria</h1>

    <a href="/admin/propiedades/crear.php" class="boton-verde">Crear Nueva Propiedad</a>
    <a href="/admin/propiedades/actualizar.php" class="boton-verde">Actualizar Nueva Propiedad</a>
    <a href="/admin/propiedades/borrar.php" class="boton-verde">Eliminar Nueva Propiedad</a>
</main>

<?php incluirTemplate('footer'); ?>