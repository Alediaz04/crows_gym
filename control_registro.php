<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    

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
            echo '<div class="modal fade" id="compraExitosaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">¡Registro Exitoso!</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>✅Sus datos se han guardado correctamente en el sistema</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>';
            echo '<script>
             document.addEventListener("DOMContentLoaded", function() {
             var myModal = new bootstrap.Modal(document.getElementById("compraExitosaModal"));
             myModal.show();
             });
            </script>';
            $_SESSION['nombre']=$nombre;
        } else {
            echo '<div class="modal fade" id="errorModal" tabindex="-1" aria-labelledby="errorModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header bg-danger text-white">
                                <h5 class="modal-title">Error en el envio</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>❌ Hubo un problema al procesar los datos.</p>
                                <p>Error técnico: ' . mysqli_error($conexion) . '</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>';

            
            echo '<script>
                    document.addEventListener("DOMContentLoaded", function() {
                        var errorModal = new bootstrap.Modal(document.getElementById("errorModal"));
                        errorModal.show();
                    });
                  </script>';
        }
    }
}

?>
</body>
</html>