<?php
include("conexion.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['nombreForm']) || empty($_POST['emailForm']) || empty($_POST['asunto']) || empty($_POST['texto'])) {
        echo "Error: Hay campos vacíos.";
    } else {
        $nombreForm = mysqli_real_escape_string($conexion, $_POST['nombreForm']);
        $emailForm = mysqli_real_escape_string($conexion, $_POST['emailForm']);
        $asunto = mysqli_real_escape_string($conexion, $_POST['asunto']); 
        $texto = mysqli_real_escape_string($conexion, $_POST['texto']);

        $sql = "INSERT INTO form (nombreForm, emailForm, asunto, texto) VALUES ('$nombreForm', '$emailForm', '$asunto', '$texto')";
        
        if (mysqli_query($conexion, $sql)) {
            echo "✅ Mensaje enviado con exito.";
        } else {
            echo "❌ Error en la consulta: " . mysqli_error($conexion);
        }
    }
}
?>