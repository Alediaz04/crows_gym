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
            echo '<div class="modal fade" id="compraExitosaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">¡Mensaje enviado correctamente!</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>✅Tu mensaje se a enviado correctamente. Pronto nos comunicaremos con usted</p>
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
        } else {
            echo '<div class="modal fade" id="errorModal" tabindex="-1" aria-labelledby="errorModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header bg-danger text-white">
                                <h5 class="modal-title">Error en el envio</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>❌ Hubo un problema al enviar el mensaje.</p>
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