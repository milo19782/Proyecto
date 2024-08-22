<?php

    include 'conexion_be.php';

    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    $query = "INSERT INTO usuarios(correo, contrasena) 
                VALUES('$correo', '$contrasena')";

    $ejecutar = mysqli_query($conexion, $query);

?>