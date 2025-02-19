<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COMPRAR/Crows-Gym</title>
    <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="stylecompra.css">
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
            <form action="control_compra.php" method="post">
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
                <div class="card">
                    <h4 class="titleCard">card</h4>
                    <img src="img/chiptar.png" width="50px" alt="" class="chip">
                    <i class="bi bi-wifi wif"></i>
                    <label for=""></label><br>
                    <input class="numeroCard" type="number" name="tarjeta" placeholder="1234 XXXX XXXX 4321" required>
                    <br>

                    <label for="">Cvv</label>
                    <input class="cvv" type="text" name="cvv" placeholder="XXX" required>

                    <label for="">Fecha Caducidad</label>
                    <input class="fecha" type="date" name="fechacard" required>
                    <br>
                </div>
                
                <!-- Fin inputs tarjeta -->

                <div class="contenedor">
                    <button class="btn" type="submit">CONFIRMAR COMPRA</button>
                </div>
                
            </form>
        </div>
        

    </main>
</body>
</html>