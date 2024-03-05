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

<?php
// Definir un array de números
$numeros = array(5, 10, 15, 20, 25);

// Mostrar el contenido del array
echo "Contenido del array de números:<br>";
foreach ($numeros as $numero) {
    echo "$numero ";
}
echo "<br><br>";

// Agregar un elemento al final del array
$numeros[] = 30;

// Mostrar el contenido del array actualizado
echo "Contenido del array después de agregar 30 al final:<br>";
foreach ($numeros as $numero) {
    echo "$numero ";
}
echo "<br><br>";

// Contar la cantidad de elementos en el array
$cantidad_elementos = count($numeros);
echo "Cantidad de elementos en el array: $cantidad_elementos<br><br>";

// Calcular el promedio de los números en el array
$suma = array_sum($numeros);
$promedio = $suma / $cantidad_elementos;
echo "El promedio de los números en el array es: $promedio<br><br>";

// Encontrar el número máximo en el array
$maximo = max($numeros);
echo "El número máximo en el array es: $maximo<br><br>";

// Buscar si un número específico está presente en el array
$numero_buscado = 20;
if (in_array($numero_buscado, $numeros)) {
    echo "El número $numero_buscado está presente en el array.<br><br>";
} else {
    echo "El número $numero_buscado no está presente en el array.<br><br>";
}

// Eliminar el primer elemento del array
$primer_elemento = array_shift($numeros);
echo "Se ha eliminado el primer elemento del array: $primer_elemento<br>";

// Mostrar el contenido del array después de eliminar el primer elemento
echo "Contenido del array después de eliminar el primer elemento:<br>";
foreach ($numeros as $numero) {
    echo "$numero ";
}
?>

