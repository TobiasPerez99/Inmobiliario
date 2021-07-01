<?php

//Base de datos

require '../../includes/config/databases.php';

$db = conectarDB();

// var_dump($db)

    require '../../includes/funciones.php';

incluirTemplate('header');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo"<pre>";
    var_dump($_POST);
    echo"</pre>";
}

$titulo = $_POST['titulo'];
$precio = $_POST['precio'];
$descripcion = $_POST['descripcion'];
$habitaciones = $_POST['habitaciones'];
$estacionamiento = $_POST['estacionamiento'];
$wc = $_POST['wc'];
$vendedor = $_POST['vendedor'];


//insertando en la db

$query = "INSERT INTO propiedades(titulo, descripcion , precio , habitaciones , wc, estacionamiento , vendedorid) VALUES ('$titulo' , '$descripcion' , '$precio' , '$habitaciones' , '$wc' ,'$estacionamiento' ,'$vendedor')";

echo($query);

$resultado = mysqli_query($db , $query);

if (!$resultado) {
    echo"Insertado Correctamente";
}


?>

<main class="contenedor seccion">
    <h1>Crear</h1>



    <form action="" class="formulario" method="POST" action="/admin/propiedades/crear.php">
        <fieldset>
            <legend>Informacion General de Nuestra Propiedad</legend>

            <label for="titulo">Titulo: </label>
            <input type="text" name="titulo" id="titulo" placeholder="Titulo Propiedad">

            <label for="precio">Precio: </label>
            <input type="number" name="precio" id="precio" placeholder="Precio de la Propiedad">

            <label for="imagen">Imagen: </label>
            <input type="file" id="imagen" name="imagen" accept="image/jpeg , image/png">

            <label for="descripcion">Descripcion</label>
            <textarea name="descripcion" id="descripcion" cols="30" rows="10"></textarea>
        </fieldset>

        <fieldset>
            <legend>Informacion de la Propiedad</legend>

            <label for="habitaciones">Habitaciones: </label>
            <input type="number" name="habitaciones" id="habitaciones" placeholder="Cantidad de Habitaciones">

            <label for="estacionamiento">Estacionamiento: </label>
            <input type="number" name="estacionamiento" id="estacionamiento" placeholder="Cantidad de Estacionamientos ">

            <label for="wc">Baños: </label>
            <input type="number" id="wc" name="wc" placeholder="Cantidad de wc">
        </fieldset>

        <fieldset>
            <legend>Vendedor</legend>
            <select name="vendedor" id="">
                <option value="1">Juan</option>
                <option value="2">Julian</option>
            </select>
        </fieldset>

    <input type="submit" value="Crear Propiedad" class="boton boton-verde">

    </form>

    <a href="/admin/index.php" class="boton-verde">Volver</a>
</main>

<?php incluirTemplate('footer'); ?>