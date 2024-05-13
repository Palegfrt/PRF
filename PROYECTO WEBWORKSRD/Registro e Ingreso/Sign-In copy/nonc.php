<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "prf";
$connn = new mysqli($servername, $username, $password, $dbname);
if ($connn->connect_error) {
    die("Conexión fallida: " . $connn->connect_error);
}
$nombre = $_POST['Nombre'];
$email = $_POST['Email'];
$mensaje = $_POST['Contraseña'];
$sql = "INSERT INTO usuario (Contraseña, Nombre, Correo) VALUES (?, ?, ?)";
$stmt = $connn->prepare($sql);
$stmt->bind_param("sss",$mensaje,$nombre,$email);
if ($stmt->execute()) {
    header("Location:/PROYECTO WEBWORKSRD/thks.html");
} else {
    echo "Error al insertar los datos: " . $stmt->error;
}
?>