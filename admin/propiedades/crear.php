<?php
require '../../includes/app.php';

use App\Propiedad;

estaAutenticado();

$db = conectarDB();

//obtener vendedores
$consulta = "SELECT * FROM vendedores";
$resultado1 = mysqli_query($db, $consulta);

//Arreglo con mensajes de erro
$errores = Propiedad::getErrores();


$titulo = '';
$precio = '';
$descripcion = '';
$habitaciones = '';
$estacionamiento = '';
$wc = '';
$creado = date('Y/m/d');
$vendedor = '';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {


    $propiedad = new Propiedad($_POST);

    $errores =  $propiedad->validar();

    // debuguear($errores);

    //insertando en la db

    if (empty($errores)) {

        $propiedad->guardar();

        //asignando imagen

        $imagen = $_FILES['imagen'];

        //Subiendo archivos

        //crear carpeta

        $carpetaImagenes = '../../imagenes/';

        if (!is_dir($carpetaImagenes)) {
            mkdir($carpetaImagenes);
        }

        //randomico nombre

        $nombreImagen = md5(uniqid(rand(), true)) . ".jpg";


        //subir la  imagen
        move_uploaded_file($imagen['tmp_name'], $carpetaImagenes . $nombreImagen);

        // $resultado = mysqli_query($db, $query);

        // if ($resultado) {
        //     header('Location: /admin?resultado=1');
        // }
    }
}
incluirTemplate('header');


?>


<main class="contenedor seccion">
    <h1>Crear</h1>

    <?php foreach ($errores as $error) : ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach ?>

    <form action="" class="formulario" method="POST" action="/admin/propiedades/crear.php" enctype="multipart/form-data">
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
            <select name="vendedorid">
                <option value="">--Seleccione--</option>
                <?php while ($vendedor = mysqli_fetch_assoc($resultado1)) : ?>
                    <option <?php echo $vendedor === $vendedor['id'] ? 'selected' : ''; ?> value="<?php echo $vendedor['id'];  ?>">
                        <?php echo $vendedor['nombre'] . " " . $vendedor['apellido']; ?>
                    </option>
                <?php endwhile; ?>

            </select>
        </fieldset>

        <input type="submit" value="Crear Propiedad" class="boton boton-verde">

    </form>

    <a href="/admin/index.php" class="boton-verde">Volver</a>
</main>


<?php incluirTemplate('footer'); ?>