<?php


require 'includes/app.php';

$db = conectarDB();

//autenticar al usuario

$errores = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $email = mysqli_real_escape_string($db, filter_var($_POST['email'], FILTER_VALIDATE_EMAIL));
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (!$email) {
        $errores [] = "El email es obligatorio o es invalido";
    }
    if (!$password) {
        $errores [] = "El passwordasd es obligatorio o es invalido";
    }

    if (empty($errores)) {
        $query = "SELECT * FROM usuarios WHERE email = '${email}' ";
        $resultado = mysqli_query($db , $query);

        if ($resultado->num_rows) {

            //verificar si el pass es correcto

            $usuario = mysqli_fetch_assoc($resultado);

            // var_dump($usuario['password']);

            //verificar si el pass es correcto o no

            $auth = password_verify($password , $usuario['password']);

            if ($auth) {

                session_start();

                $_SESSION['usuario'] = $usuario['email'];
                $_SESSION['login'] = true;

                header('Location: /admin');

            } else {
                $errores[] = 'El password es incorrecto';
            }

        } else {
            $errores[] = 'El usuario no existe';
        }

    }

}



incluirTemplate('header');

?>

<main class="contenedor seccion  contenido-centrado">
               <h1>Iniciar Sesion</h1>

                <?php foreach ($errores as $errores) : ?>

                    <div class="alerta error">

                    <?php echo $errores; ?>

                    </div>

                <?php endforeach; ?>

               <form action="" method="POST" class="formulario">


                              <fieldset>
                                             <legend>Email y Password</legend>

                                             <label for="Email">Email:</label>
                                             <input name="email" type="email" placeholder="Tu Email" id="email">

                                             <label for="password">password:</label>
                                             <input name="password" type="password" placeholder="Tu password" id="password">

                              </fieldset>

                              <input type="submit" value="Iniciar Sesion" class=" boton boton-verde-block">


               </form>


</main>

<?php incluirTemplate('footer'); ?>