<?php
$Usuario = $_POST['Usuario'];
$Contraseña = $_POST['Contraseña'];
$Email = $_POST['Email'];

$servidor = "localhost";
$user = "root";

$clave ="";
$BD = "pasteleria";

$conexion = mysqli_connect($servidor, $user, $clave, $BD);
if(!$conexion)
{
    die("Error de conexion");
}

$sql = "INSERT INTO login (Usuario,Contraseña,Email) VALUES ('$Usuario','$Contraseña','$Email')";

$resultado = mysqli_query($conexion, $sql);



if($resultado)
{
    
    header("Location:compra.html"); 
 }
else{
    echo "Intentelo de nuevo";
}

?>