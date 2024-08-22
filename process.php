<?php
// Database connection details
$host = "localhost";
$dbname = "root";
$username = "root";  // Your MySQL username (if it is 'root')
$password = "";      // Your MySQL password (if it is empty)

try {
    // Create a new PDO instance and connect to the database
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Retrieve the email and password from the POST request
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hash the password for security

        // Prepare the SQL query to insert the data into the 'registro' table
        $sql = "INSERT INTO registro (email, password) VALUES (:email, :password)";
        $stmt = $conn->prepare($sql);

        // Bind the email and password parameters to the query
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);

        // Execute the query
        if ($stmt->execute()) {
            echo "Registro exitoso!";
        } else {
            echo "Error en el registro.";
        }
    }
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}

// Close the connection
$conn = null;
?>
