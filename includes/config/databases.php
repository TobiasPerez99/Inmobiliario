<?php

function conectarDB() : mysqli{

    $db = new mysqli('127.0.0.1','root' , '', 'bienes_raices');

    if (!$db) {
        echo "Eror no se pudo conectar";

        exit;
    }

    return $db;

}

?>