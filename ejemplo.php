<?php
 $user = "root";
 $pass = "";
 $host = "localhost";

 $connection = mysqli_connect($host, $user, $pass);

 $email = $_POST["email"]
 $password = $_POST["password"]

 if(!$connection)
            {
                echo "no se ha podido conectar con el servidor" . mysql_error();
            }
    else
            {
                echo "<b><h3>Hemos conectado al servidor</h3></b>" ;
            }

            $datab = "ejemplo";

            $db = mysqli_select_db($connection,$datab);

            if (!$db)
            {
            echo "No se ha podido encontrar la tabla";
            }
            else
            {
            echo "<h3>Tabla seleccionada:</h3>" ;
            }

            $instruccion_SQL = "INSERT INTO registro (email, password)
                                VALUES ('$email','$password')";

            $resultado = mysqli_query($connection,$instruccion_SQL);


            $consulta = "SELECT * FROM registro ";

$result =  mysqli_query($connection,$consulta); 
if(!$result)
{
    echo "No se ha podido realizar la consulta"

}

?>
