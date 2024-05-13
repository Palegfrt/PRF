<!DOCTYPE html>
<html>
<head>
    <title>Tabla de Productos</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>id</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th>Estado</th>
            <th>Poseedor</th>
        </tr>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "prf";
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Conexión fallida: " . $conn->connect_error);
        }

        // Consulta SQL para obtener los datos de la tabla "productos"
        $sql = "SELECT * FROM productos";
        $resultado = $conn->query($sql);

        // Mostrar los datos de cada fila
        if ($resultado->num_rows > 0) {
            while ($fila = $resultado->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $fila["id"] . "</td>";
                echo "<td>" . $fila["Nombre"] . "</td>";
                echo "<td>" . $fila["Descrpcion"] . "</td>";
                echo "<td>" . $fila["Precio"] . "</td>";
                echo "<td>" . $fila["Estado"] . "</td>";
                echo "<td>" . $fila["Poseedor"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='6'>No se encontraron datos en la tabla.</td></tr>";
        }

        $conn->close();
        ?>
    </table>
</body>
</html>