 <?php

    if (isset($_SESSION)) {
        session_start();
    }

    $auth = $_SESSION['login'] ?? null;

    ?>

 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Inmobiliaria</title>
     <link rel="stylesheet" href="/build/css/app.css">
 </head>

 <body>

     <header class="header inicio">
         <div class="contenedor contenido-header">
             <div class="barra">
                 <a href="/">
                     <img src="/build/img/logo.svg" alt="logotipo">
                 </a>

                 <nav class="navegacion">
                     <a href="nosotros.php">Nosotros</a>
                     <a href="anuncios.php">Anuncios</a>
                     <a href="blog.php">Blog</a>
                     <a href="contacto.php">Contacto</a>
                     <?php if ($auth) : ?>
                     <a href="/cerrar-sesion.php">Cerrar Sesion</a>
                     <?php endif; ?>

                 </nav>
             </div>
             <h1>Venta de casas y departemantos exclusivos de lujo</h1>
         </div>

     </header>