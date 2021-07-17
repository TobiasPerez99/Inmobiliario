<?php

//validar la url por iD valido

$id = $_GET['id'];
$id = filter_var($id, FILTER_VALIDATE_INT);


if (!$id) {
    header('Location: /admin');
}




//Base de datos

require '../../includes/config/databases.php';

$db = conectarDB();

//obtener los datos de la propiedad

$consulta = "SELECT * FROM propiedades";
$resultado = mysqli_query($db, $consulta);
$propiedad = mysqli_fetch_assoc($resultado);


//obtener vendedores
$consulta = "SELECT * FROM vendedores";
$resultado1 = mysqli_query($db, $consulta);



//Arreglo con mensajes de erro
$errores = [];

$titulo = $propiedad['titulo'];
$precio = $propiedad['precio'];
$descripcion = $propiedad['descripcion'];
$habitaciones = $propiedad['habitaciones'];
$estacionamiento = $propiedad['estacionamiento'];
$wc = $propiedad['wc'];
$creado = date('Y/m/d');
$vendedor = $propiedad['vendedorid'];


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $titulo = mysqli_real_escape_string($db,  $_POST['titulo']);
    $precio = mysqli_real_escape_string($db,  $_POST['precio']);
    $descripcion = mysqli_real_escape_string($db,  $_POST['descripcion']);
    $habitaciones = mysqli_real_escape_string($db,  $_POST['habitaciones']);
    $estacionamiento = mysqli_real_escape_string($db,  $_POST['estacionamiento']);
    $wc = mysqli_real_escape_string($db,  $_POST['wc']);
    $creado = date('Y/m/d');
    $vendedor = mysqli_real_escape_string($db,  $_POST['vendedor']);

    //asignando imagen

    $imagen = $_FILES['imagen'];


    if (!$titulo) {
        $errores[] = "Debes agregar un Titulo";
    }
    if (!$precio) {
        $errores[] = "Debes agregar un Precio";
    }
    if (strlen($descripcion) < 1) {
        $errores[] = "La descripcion debe ser mayor a 50 caracteres";
    }
    if (!$habitaciones) {
        $errores[] = "Debes agregar un numero de habitaciones";
    }
    if (!$estacionamiento) {
        $errores[] = "Debes agregar un numero de estacionamientos";
    }
    if (!$wc) {
        $errores[] = "Debes agregar un numero de baños";
    }
    if (!$titulo) {
        $errores[] = "Debes agregar un valor";
    }
    if (!$vendedor) {
        $errores[] = "Debes seleccionar un vendedor";
    }
    //validando por tamaños (100kb max)
    $medida = 1000 * 100;
    if ($imagen['size'] > $medida) {
        $errores[] = "El archivo debe pesar menos de 100kb";
    }
    //insertando en la db

    if (empty($errores)) {

        //Subiendo archivos

        //crear carpeta

        $carpetaImagenes = '../../imagenes/';

        if (!is_dir($carpetaImagenes)) {
            mkdir($carpetaImagenes);
        }

        //update de imagen

        if ($imagen['name']) {
            unlink($carpetaImagenes . $propiedad['imagen']);

            //randomico nombre

            $nombreImagen = md5(uniqid(rand(), true)) . ".jpg";


            //subir la  imagen
            move_uploaded_file($imagen['tmp_name'], $carpetaImagenes . $nombreImagen);
        }else {
            $nombreImagen = $propiedad['imagen'];
        }




        // $query = "UPDATE SET titulo = '${titulo}' , precio = '${precio}' , descripcion = '${descripcion}' , habitaciones = ${habitaciones} , wc = ${wc} , estacionamiento = ${estacionamiento} , vendedorid = ${vendedorid} WHERE id = ${id}";

        $query = "UPDATE propiedades SET titulo = '${titulo}' , precio = '${precio}' , imagen = '${nombreImagen}' ,descripcion = '${descripcion}' , habitaciones = ${habitaciones}, wc = ${wc}, estacionamiento = ${estacionamiento} , vendedorid  = ${vendedor}  WHERE id = ${id}";

        $resultado = mysqli_query($db, $query);


            // echo "<pre>";
            // var_dump($query_tunning);
            // echo "</pre>";
            // exit;

        if ($resultado) {
            header('Location: /admin?resultado=2');
        }
    }
}
require '../../includes/funciones.php';
incluirTemplate('header');


?>


<main class="contenedor seccion">
    <h1>Actualizar</h1>

    <?php foreach ($errores as $error) : ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>

    <form action="" class="formulario" method="POST" enctype="multipart/form-data">
        <fieldset>
            <legend>Informacion General de Nuestra Propiedad</legend>

            <label for="titulo">Titulo: </label>
            <input type="text" name="titulo" id="titulo" placeholder="Titulo Propiedad" value="<?php echo $titulo; ?>">

            <label for="precio">Precio: </label>
            <input type="number" name="precio" id="precio" placeholder="Precio de la Propiedad" value="<?php echo $precio; ?>">

            <label for=" imagen">Imagen: </label>
            <input type="file" id="imagen" name="imagen" accept="image/jpeg , image/png">


            <img src="/imagenes/<?php echo $imagen; ?>" alt="">


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
                <?php while ($vendedor = mysqli_fetch_assoc($resultado1)) : ?>

                    <option <?php echo $vendedorid === $vendedor['id'] ? 'selected' : ''; ?> value="<?php echo $vendedor['id']; ?>">
                        <?php echo $vendedor['nombre'] . " " . $vendedor['apellido']; ?>
                    </option>

                <?php endwhile; ?>
            </select>
        </fieldset>

        <input type="submit" value="Actualizar Propiedad" class="boton boton-verde">

    </form>

    <a href="/admin/index.php" class="boton-verde">Volver</a>
</main>


<?php incluirTemplate('footer'); ?>