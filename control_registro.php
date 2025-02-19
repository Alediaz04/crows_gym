<?php
session_start();
include("conexion.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['nombre']) || empty($_POST['email']) || empty($_POST['contraseña']) || empty($_POST['fecha'])) {
        echo "Error: Hay campos vacíos.";
    } else {
        $nombre = mysqli_real_escape_string($conexion, $_POST['nombre']);
        $email = mysqli_real_escape_string($conexion, $_POST['email']);
        $pass = mysqli_real_escape_string($conexion, $_POST['contraseña']); 
        $telefono = !empty($_POST['telefono']) ? mysqli_real_escape_string($conexion, $_POST['telefono']) : NULL;
        $fecha = mysqli_real_escape_string($conexion, $_POST['fecha']);

        $sql = "INSERT INTO datos (nombre, email, contraseña, telefono, fecha) VALUES ('$nombre', '$email', '$pass', '$telefono', '$fecha')";
        
        if (mysqli_query($conexion, $sql)) {
            echo "✅ Registro exitoso.";
            $_SESSION['nombre']=$nombre;
        } else {
            echo "❌ Error en la consulta: " . mysqli_error($conexion);
        }
    }
}
?>