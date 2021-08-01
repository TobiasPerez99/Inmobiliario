<?php

require 'includes/app.php';
$db = conectarDB();

//Crear un Email y un password

$email = "correo@correo.com.ar";
$password = "123456";

$passwordHash = password_hash($password , PASSWORD_BCRYPT);

// var_dump($passwordHash);

$query = "INSERT INTO usuarios (email , password) VALUES ('${email}' , '${passwordHash}');";

$resultado = mysqli_query($db, $query);


?>