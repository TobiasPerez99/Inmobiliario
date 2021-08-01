<?php

// require __DIR__ . '/../config/databases.php';

$db = conectarDB();

$query = "SELECT * FROM propiedades LIMIT ${limite}";

$resultado = mysqli_query($db, $query);

?>

<div class="contenedor-anuncio">
               <?php while ($propiedades = mysqli_fetch_assoc($resultado)) : ?>

                              <div class="anuncio">
                                             <img loading="lazy" src="/imagenes/<?php echo $propiedades['imagen'] ?>" alt="anuncio1">
                                             <div class="contenido-anuncio">
                                                            <h3><?php echo $propiedades['titulo'] ?></h3>
                                                            <p><?php echo $propiedades['descripcion'] ?></p>
                                                            <p class="precio">$ <?php echo $propiedades['precio'] ?>0</p>

                                                            <ul class="iconos-caracteristicas">
                                                                           <li>
                                                                                          <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="">
                                                                                          <p><?php echo $propiedades['habitaciones'] ?></p>
                                                                           </li>
                                                                           <li>
                                                                                          <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="">
                                                                                          <p><?php echo $propiedades['wc'] ?></p>
                                                                           </li>
                                                                           <li>
                                                                                          <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="">
                                                                                          <p><?php echo $propiedades['estacionamiento'] ?></p>
                                                                           </li>

                                                            </ul>
                                                            <a href="/anuncio.php?id=<?php echo $propiedades['id'] ?>" class="boton boton-amarillo-block">Ver Propiedad</a>
                                             </div>
                              </div>
               <?php endwhile; ?>
</div>