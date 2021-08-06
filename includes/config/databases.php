<?php

function conectarDB() : mysqli{

    $db = new mysqli('192.168.0.13','meemba' , 'meemba', 'bienes_raices');

    if (!$db) {
        echo "Eror no se pudo conectar";

        exit;
    }

    return $db;

}

?>