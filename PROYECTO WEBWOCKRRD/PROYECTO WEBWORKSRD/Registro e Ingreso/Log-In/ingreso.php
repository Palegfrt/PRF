<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iniciar Sesión</title>
  <link rel="stylesheet" href="style (1).css">
</head>

<body>
  <div class="container">
    <h1>Drift Tropical</h1>
    <form>
      <input type="email" placeholder="Email" />
      <input type="password" placeholder="Password" />
      <button type="submit">Ingresar</button>
    </form>
    <p><a href="#">¿Olvidaste tu contraseña?</a></p>
    <p>No tienes una cuenta? <a href="../Sign-In/index.html">Regístrate</a></p>
  </div>

  <script src="script.js"></script>
</body>
<?php
include 'coenn.php';

// Obtener los datos del formulario
$username = $_POST['usuario'];
$password = $_POST['contrasena'];

// Prepara la consulta SQL para buscar al usuario
$stmt = $conn->prepare("SELECT * FROM login WHERE usuario = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    // Verifica la contraseña
    if (password_verify($password, $row['contrasena'])) {
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
</html>