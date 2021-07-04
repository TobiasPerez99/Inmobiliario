<?php

//Base de datos

require '../../includes/config/databases.php';

$db = conectarDB();

//Arreglo con mensajes de erro
$errores = [];

$titulo = '';
$precio = '';
$descripcion = '';
$habitaciones = '';
$estacionamiento = '';
$wc = '';
$vendedor = '';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $titulo = $_POST['titulo'];
    $precio = $_POST['precio'];
    $descripcion = $_POST['descripcion'];
    $habitaciones = $_POST['habitaciones'];
    $estacionamiento = $_POST['estacionamiento'];
    $wc = $_POST['wc'];
    $vendedor = $_POST['vendedor'];

    if (!$titulo) {
        $errores[] = "Debes agregar un Titulo";
    }
    if (!$precio) {
        $errores[] = "Debes agregar un Precio";
    }
    if (strlen($descripcion) < 50) {
        $errores[] = "La descripcion debe ser mayor a 50 caracteres";
    }
    if (!$habitaciones) {
        $errores[] = "Debes agregar un valor";
    }
    if (!$estacionamiento) {
        $errores[] = "Debes agregar un valor";
    }
    if (!$titulo) {
        $errores[] = "Debes agregar un valor";
    }
    if (!$vendedor) {
        $errores[] = "Debes seleccionar un vendedor";
    }

    // echo "<pre>";
    // var_dump($errores);
    // echo "</pre>";

    // exit;

    //insertando en la db

    $query = "INSERT INTO propiedades(titulo, descripcion , precio , habitaciones , wc, estacionamiento , vendedorid) VALUES ('$titulo' , '$descripcion' , '$precio' , '$habitaciones' , '$wc' ,'$estacionamiento' ,'$vendedor')";

    echo ($query);

    $resultado = mysqli_query($db, $query);

    if (!$resultado) {
        echo "Insertado Correctamente";
    }
}
require '../../includes/funciones.php';
incluirTemplate('header');


?>


<main class="contenedor seccion">
    <h1>Crear</h1>

    <?php foreach ($errores as $error) : ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach ?>

    <form action="" class="formulario" method="POST" action="/admin/propiedades/crear.php">
        <fieldset>
            <legend>Informacion General de Nuestra Propiedad</legend>

            <label for="titulo">Titulo: </label>
            <input type="text" name="titulo" id="titulo" placeholder="Titulo Propiedad" value="<?php echo $titulo; ?>">

            <label for="precio">Precio: </label>
            <input type="number" name="precio" id="precio" placeholder="Precio de la Propiedad" value="<?php echo $precio; ?>">

            <label for=" imagen">Imagen: </label>
            <input type="file" id="imagen" name="imagen" accept="image/jpeg , image/png">

            <label for="descripcion">Descripcion</label>
            <textarea name="descripcion" id="descripcion" cols="30" rows="10"><?php echo $descripcion; ?></textarea>
        </fieldset>

        <fieldset>
            <legend>Informacion de la Propiedad</legend>

            <label for="habitaciones">Habitaciones: </label>
            <input type="number" name="habitaciones" id="habitaciones" placeholder="Cantidad de Habitaciones" value="<?php echo $habitaciones; ?>">

            <label for=" estacionamiento">Estacionamiento: </label>
            <input type="number" name="estacionamiento" id="estacionamiento" placeholder="Cantidad de Estacionamientos" value="<?php echo $estacionamiento; ?>">

            <label for=" wc">Baños: </label>
            <input type="number" id="wc" name="wc" placeholder="Cantidad de wc" value="<?php echo $wc; ?>">
        </fieldset>

        <fieldset>
            <legend>Vendedor</legend>
            <select name="vendedor" id="">
                <option value="">--Selectiona---</option>
                <option value="1">Juan</option>
                <option value="2">Julian</option>
            </select>
        </fieldset>

        <input type="submit" value="Crear Propiedad" class="boton boton-verde">

    </form>

    <a href="/admin/index.php" class="boton-verde">Volver</a>
</main>

<?php incluirTemplate('footer'); ?>