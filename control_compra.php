<?php
include("conexion.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    
    if (empty($_POST['nombre']) || empty($_POST['dni']) || empty($_POST['email']) || empty($_POST['actividad']) || empty($_POST['tarjeta']) || empty($_POST['cvv']) || empty($_POST['fechacard'])) {
        echo "Error: Hay campos vacíos.";
    } else {
        $nombre = mysqli_real_escape_string($conexion, $_POST['nombre']);

        $dni = mysqli_real_escape_string($conexion, $_POST['dni']);

        $email = mysqli_real_escape_string($conexion, $_POST['email']); 

        $actividad = mysqli_real_escape_string($conexion, $_POST['actividad']);

        $tarjeta = mysqli_real_escape_string($conexion, $_POST['tarjeta']);

        $cvv = mysqli_real_escape_string($conexion, $_POST['cvv']);

        $fechacard = mysqli_real_escape_string($conexion, $_POST['fechacard']);

        $sql = "INSERT INTO compra (nombre, dni, email, actividad, tarjeta, cvv, fechacard) VALUES ('$nombre', '$dni', '$email', '$actividad', '$tarjeta', '$cvv', '$fechacard')";
        
        if (mysqli_query($conexion, $sql)) {
            echo "✅ Registro exitoso.";
        } else {
            echo "❌ Error en la consulta: " . mysqli_error($conexion);
        }
    }
}
?>