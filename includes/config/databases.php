<?php 

function conectarDB(){
    $db = mysqli_connect('localhost','root' , 'root', 'bienes_raices');

    if (!$db) {
        echo "Eror no se pudo conectar";

        exit;
    }

    return $db;

}