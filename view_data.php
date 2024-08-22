<?php
// Ruta del archivo donde se guardan los datos
$file = 'data.txt';

// Verificar si el archivo existe
if (file_exists($file)) {
    // Leer el contenido del archivo
    $data = file_get_contents($file);

    // Mostrar el contenido en una página web
    echo "<h1>Datos Guardados</h1>";
    echo "<pre>" . htmlspecialchars($data) . "</pre>";
} else {
    echo "No se encontraron datos.";
}
?>