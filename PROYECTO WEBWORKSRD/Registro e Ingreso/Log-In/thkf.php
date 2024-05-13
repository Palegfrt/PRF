<?php
$servername = "localhost";
$susername = "root";
$spassword = "";
$dbname = "prf";
$conn = new mysqli($servername, $susername, $spassword, $dbname);
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener los datos del formulario
$username = $_POST['Email'];
$password = $_POST['Contraseña'];

// Prepara la consulta SQL para buscar al usuario
$stmt = $conn->prepare("SELECT * FROM usuario WHERE Correo = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    // Verifica la contraseña
    if (password_verify($password, $row['Contraseña'])) {
        // Inicio de sesión exitoso
        echo "Inicio de sesión exitoso";
        // Aquí puedes iniciar la sesión y redirigir al usuario
    } else {
        echo "Contraseña incorrecta";
    }
} else {
    echo "Usuario no encontrado";
}

// Cierra la conexión a la base de datos
$stmt->close();
$conn->close();
?>