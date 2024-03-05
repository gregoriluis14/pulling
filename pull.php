<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesar Datos PHP</title>
</head>
<body>
    <?php
    // Verificar si se ha enviado el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener los datos del formulario
        $nombre = $_POST["nombre"];
        $email = $_POST["email"];
        
        // Mostrar los datos
        echo "<p>Nombre: $nombre</p>";
        echo "<p>Email: $email</p>";
    } else {
        // Si no se ha enviado el formulario, mostrar un mensaje de error
        echo "<p>Error: El formulario no ha sido enviado.</p>";
    }
    ?>
</body>
</html>
