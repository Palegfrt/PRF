<?php
// Conexión a la base de datos
$conexion = mysqli_connect('localhost', 'usuario', 'contraseña', 'nombre_base_de_datos');

// Verificar la conexión
if (!$conexion) {
    die("La conexión ha fallado: " . mysqli_connect_error());
}

// Consulta SQL para obtener los datos
$sql = "SELECT id, nombre, email FROM usuarios";
$resultado = mysqli_query($conexion, $sql);

// Mostrar los datos en la tabla
if (mysqli_num_rows($resultado) > 0) {
    while ($fila = mysqli_fetch_assoc($resultado)) {
        echo "<tr><td>" . $fila['id'] . "</td><td>" . $fila['nombre'] . "</td><td>" . $fila['email'] . "</td></tr>";
    }
} else {
    echo "<tr><td colspan='3'>No se encontraron resultados</td></tr>";
}

// Cerrar la conexión
mysqli_close($conexion);
?>
