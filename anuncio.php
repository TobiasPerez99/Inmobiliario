<?php

$id = $_GET['id'];
$id = filter_var($id, FILTER_VALIDATE_INT);

if (!$id) {
    header('Location: /');
}

require 'includes/app.php';

$db = conectarDB();

$query = "SELECT * FROM propiedades WHERE id = $id";

$resultado = mysqli_query($db, $query);
$propiedades = mysqli_fetch_assoc($resultado);



incluirTemplate('header');

?>


<main class="contenedor seccion contenido-centrado">
    <h1><?php echo $propiedades['titulo'] ?></h1>
    <picture>
        <img loading='lazy' src="/imagenes/<?php echo $propiedades['imagen'] ?>" alt="">
    </picture>

    <div class="resumen-propiedad">
        <p class="precio">$ <?php echo $propiedades['precio'] ?></p>
        <ul class="iconos-caracteristicas">
            <li>
                <img loading="lazy" src="build/img/icono_dormitorio.svg" alt="">
                <p><?php echo $propiedades['habitaciones'] ?></p>
            </li>
            <li>
                <img loading="lazy" src="build/img/icono_wc.svg" alt="">
                <p><?php echo $propiedades['wc'] ?></p>
            </li>
            <li>
                <img loading="lazy" src="build/img/icono_estacionamiento.svg" alt="">
                <p><?php echo $propiedades['estacionamiento'] ?></p>
            </li>

        </ul>

        <p><?php echo $propiedades['descripcion'] ?></p>

    </div>

</main>

<?php incluirTemplate('footer'); ?>