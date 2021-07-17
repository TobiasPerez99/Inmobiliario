<?php

//importar la conexion

require '../includes/config/databases.php';
$db = conectarDB();

//escribir el query

$query = "SELECT * FROM propiedades";

//consultar db

$queryResultado = mysqli_query($db, $query);

//MUestra mensaje condicional

$resultado = $_GET['resultado'] ?? null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $id = filter_var($id , FILTER_VALIDATE_INT);

    if ($id) {

        $query = "SELECT imagen FROM propiedades WHERE id = ${id}";
        $resultado = mysqli_query($db , $query);
        $propiedad = mysqli_fetch_assoc($resultado);

        unlink('../imagenes/'. $propiedad['imagen']);


        $query = "DELETE FROM propiedades WHERE id = ${id}";

        $resultado = mysqli_query($db , $query);

        if ($resultado) {
            header('location: /admin?resultado=3' );
        }
    }

}


//incluye template
require '../includes/funciones.php';

incluirTemplate('header');

?>

<main class="contenedor seccion">
    <h1>Administrador de Inmobiliaria</h1>

    <?php if (intval($resultado) == 1) : ?>
        <p class="alerta exito" style="padding: .5rem;text-align:  center;color: white;font-weight: 700;text-transform: uppercase;margin: 1rem 0 ; background-color:rgb(54, 161, 54)">Anuncio creado correctamente</p>
    <?php elseif (intval($resultado) ==  2) : ?>
        <p class="alerta exito" style="padding: .5rem;text-align:  center;color: white;font-weight: 700;text-transform: uppercase;margin: 1rem 0 ; background-color:rgb(54, 161, 54)">Anuncio Actualizado correctamente</p>
    <?php elseif (intval($resultado) ==  3) : ?>
        <p class="alerta exito" style="padding: .5rem;text-align:  center;color: white;font-weight: 700;text-transform: uppercase;margin: 1rem 0 ; background-color:rgb(54, 161, 54)">Anuncio Eliminado correctamente</p>
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

            <?php while ($propiedades = mysqli_fetch_assoc($queryResultado)) : ?>
                <tr>
                    <td><?php echo $propiedades['id'] ?></td>
                    <td><?php echo $propiedades['titulo'] ?></td>
                    <td><img class="imagen-tabla" src="/imagenes/<?php echo $propiedades['imagen'] ?>" alt=""></td>
                    <td><?php echo $propiedades['precio'] ?></td>
                    <td>
                        <form method="POST">

                            <input type="hidden" name="id" value="<?php echo $propiedades['id'] ?>">

                            <input  type="submit" class="w-100" value="Eliminar">

                        </form>
                        <a class="w-200" href="/admin/propiedades/actualizar.php/?id=<?php echo $propiedades['id'] ?>">Actualizar</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>

    </table>


</main>

<?php

mysqli_close($db);

incluirTemplate('footer');

?>