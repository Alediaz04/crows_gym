<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COMPRAR/Crows-Gym</title>
    <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="stylecompra.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/responsive-compra.css">
    
  

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>
<body>
    <header>
    <?php
       session_start();
       if(empty($_SESSION['nombre'])){
        $usuarioMostrar="invitado";
       }else{
         $usuarioMostrar=$_SESSION['nombre'];
        }
    
        
    ?>
        <div class="navbar">
        <a href="principal.php"><img class="logo" src="img/logo.png" width="50px" alt="No Image"></a>
            <div class="nav">
              
                <a href="principal.php">VOLVER AL INICIO</a>
                
                
            </div>
            
            <!-- <button class="btn-head"><a href="index.php">INICIAR SESIÓN</a></button> -->
            <?php  
              echo "<h1 class='nombre'> Bienvenido $usuarioMostrar</h1>"; 
              ?>
          <style>
            .nombre{
              color: red;
              font-size: 35px;
              margin-right: 20px;
            }
          </style>
        </div>


    </header>
    <main>

        <div class="compra">
            <h1 class="suscribe">SUSCRIBETE <br> A <br> <span class="crows">CROWS-GYM</span> </h1>
            <p class="parrafo">Entrena con nosotros, mejora tu fisico y se tu mejor versión. <br>
            <span class="fisico">¡¡¡CONSIGUE TU PRIME!!!</span> </p>
        </div>
        <div class="form">
            <form action="compra.php" method="post">
                <h1 class="title">REALIZA TU COMPRA!!</h1>
                <h3>Rellena con tus datos</h3>
                <label for="" >Nombre:</label><br>
                <input class="inp" type="text" name="nombre" placeholder="Pepe" required>
                <br>
                <label for="">D.N.I o CUIT:</label><br>
                <input class="inp" type="number" name="dni" placeholder="00000000" required>
                <br>
                <label for="">Email:</label><br>
                <input class="inp" type="email" name="email" placeholder="pepe01@gmail.com" required>
                <br>
                <br>

                <label for="">Plan:</label> <br>

                <label>
                    <input type="radio" name="actividad" value="todas">
                    Todas Las Actividades $40.000
                </label>
                <br>
                <label>
                    <input type="radio" name="actividad" value="musculacion">
                    Musculación $20.000
                </label>
                <br>
                <label>
                    <input type="radio" name="actividad" value="crossfit">
                    CrossFit $24.000
                </label>
                <br>
                <label>
                    <input type="radio" name="actividad" value="funcional">
                    Funcional $15.000
                </label>
                <br>
                <label>
                    <input type="radio" name="actividad" value="boxeo">
                    Boxeo $20.000
                </label>
                <br>
                <br>
                <!-- Comienzo Tarjeta -->
                <div class="card-compra">
                    <h4 class="titleCard">card</h4>
                    <img src="img/chiptar.png" width="50px" alt="" class="chip">
                    <i class="bi bi-wifi wif"></i>
                    <label for=""></label><br>
                    <input class="numero-card" type="number" name="tarjeta" placeholder="1234 XXXX XXXX 4321" required>
                    <br>

                    <label for="">Cvv</label>
                    <input class="cvv" type="text" name="cvv" placeholder="XXX" required>

                    <label for="">Fecha Caducidad</label>
                    <input class="fecha" type="date" name="fechacard" required>
                    <br>
                </div>
                
                <!-- Fin inputs tarjeta -->

                <div class="contenedor-compra">
                    <button class="btn-compra" type="submit">CONFIRMAR COMPRA</button>
                </div>
                
            </form>
        </div>
        

    

<?php
include("conexion.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    
    if (empty($_POST['nombre']) || empty($_POST['dni']) || empty($_POST['email']) || empty($_POST['actividad']) || empty($_POST['tarjeta']) || empty($_POST['cvv']) || empty($_POST['fechacard'])) {
        
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
            echo '<div class="modal fade" id="compraExitosaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">¡Compra Exitosa!</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>✅Tus datos han sido procesados correctamente. Nos comunicaremos contigo para continuar con tu compra</p>
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
                                <h5 class="modal-title">Error en la compra</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>❌ Hubo un problema al procesar la compra. Por favor, intenta de nuevo.</p>
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
    </main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>