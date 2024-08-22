<?php

    include 'conexion_eb.php';

    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    $query = "INSERT INTO alias(correo, contrasena) 
                VALUES('$correo', '$contrasena')";

    $ejecutar = mysqli_query($conexion, $query);

?>