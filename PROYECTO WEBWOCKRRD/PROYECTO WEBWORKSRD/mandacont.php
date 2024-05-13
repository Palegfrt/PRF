<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "prf";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
$nombre = $_POST['Nombre'];
$email = $_POST['correo'];
$mensaje = $_POST['MENSAJES'];
$sql = "INSERT INTO scq (Name_User, Email, Cont) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss",$nombre,$email,$mensaje);
if ($stmt->execute()) {
    echo "Los datos se han insertado correctamente.";
} else {
    echo "Error al insertar los datos: " . $stmt->error;
}
$sql = "SELECT * FROM `scq`;";
?>