<?php
$nombre = $_POST['Name_User'];
$email = $_POST['Email'];
$mensaje = $_POST['Cont'];

$servidor = "localhost";
$user = "root";
$clave = "";
$BD = "prf";

$conexion = mysqli_connect($servidor, $user, $clave, $BD);
if(!$conexion)
{
    die("Error de conexion");
}

$sql = "INSERT INTO scq (Name_User ,Email ,Cont) VALUES ('$nombre','$email','$mensaje')";

$resultado = mysqli_query($conexion, $sql);



if($resultado)
{
    echo "Se registró correctamente";
    
 }
else{
    echo "Intentelo de nuevo";
}
?>