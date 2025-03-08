<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio-Crows Gym</title>
    <link rel="icon" href="img/icon.png" type="image/png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="styleprincipal.css">
    <link rel="stylesheet" href="css/responsive-principal.css">

    

</head>
<body>
<?php
    session_start();
    if(empty($_SESSION['nombre'])){
        $usuarioMostrar="invitado";
    }else{
        $usuarioMostrar=$_SESSION['nombre'];
    }
    
        
?>
    <header>
        <div class="navbar">
          <a href="principal.php"><img class="logo" src="img/logo.png" alt="No Image"></a>
            <div class="nav">
              
                <a href="#inicio">INICIO</a>
                <a href="#tienda">TIENDA</a>
                <a href="trivia.php">TRIVIA</a>
                <a href="#contactanos">CONTÁCTANOS</a>
                
            </div>
            <div class="dropdown">
              <a class="btn btn-secondary dropdown-toggle dropen" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                MENÚ
              </a>
            
              <ul class="dropdown-menu ">
                <li><a class="dropdown-item" href="#tienda">TIENDA</a></li>
                <li><a class="dropdown-item" href="trivia.php">TRIVIA</a></li>
                <li><a class="dropdown-item" href="#contactanos">CONTACTÁNOS</a></li>
              </ul>
            </div>
            <!-- <button class="btn-head"><a href="index.php">INICIAR SESIÓN</a></button> -->
            <?php  
              echo "<h1 class='nombre'> Bienvenido $usuarioMostrar</h1>"; 
            ?>
          </div>
          <style>
            .nombre{
              color: red;
              font-size: 25px;
              margin-right: 20px;
            }
          </style>
          


    </header>
    <main>
        <div class="wsp">
            <a href="https://wa.me/qr/S3JM6FVPCZWXI1" target="_blank" class="wspa"><i class="bi bi-whatsapp tamaño"></i></a>
        </div>
        <!-- Comienzo Video -->
        <section class="vid">
            
          <div>
             <img src="img/TITULO MARCA.png" alt="" class="tittle"> 
             <i class="bi bi-caret-down-fill arrow"></i>

          </div>
            <video muted autoplay loop>
                <source src="video/FONDO VIDEO.mp4" type="video/mp4">
            </video>
            <div class="capa"></div>
        
            
        </section>
        <!-- INICIO -->
        <section id="inicio" class="cambio">
            <h1 class="pad">CAMBIA TU CUERPO
            </h1>
            <h1>Y</h1>
            <h1>TU VIDA</h1>
            <h2 class="crowcolor"> ¡VENITE A CROWS•GYM!</h2>

        </section>
        <!-- Presentacion: Quienes somos? que hacemos? +Foto -->
         <section class="present">
              <div class="text-present">
                <h1 class="title-present">¿Quienes Somos?</h1>
                <p class="texto-present">Somos mucho más que un gimnasio, somos una comunidad apasionada por el deporte y el bienestar. En nuestro espacio, encontrarás un ambiente motivador, entrenadores profesionales y un enfoque personalizado para que alcances tus objetivos. Nos dedicamos a transformar vidas a través del ejercicio, brindándote las mejores instalaciones y programas de entrenamiento diseñados para todos los niveles.
                <br><br>
                  
                Te ayudamos a superar tus límites y lograr la mejor versión de ti mismo. Ofrecemos una variedad de disciplinas para que entrenes a tu manera:
                <br>
                🔥 Gimnasio – Equipado con máquinas de última generación y pesas para un entrenamiento completo.
                <br>
                💪 CrossFit – Entrenamientos de alta intensidad que combinan fuerza, cardio y resistencia.
                <br>
                🏋️ Funcional – Ejercicios diseñados para mejorar tu rendimiento en la vida diaria y el deporte.
                <br>
                🥊 Boxeo – Mejora tu fuerza, resistencia y agilidad con sesiones dinámicas y desafiantes.
                
                <br><br>  
                <span class="no-text">Ya sea que busques ganar músculo, perder peso, mejorar tu resistencia o simplemente sentirte mejor, aquí encontrarás el programa ideal para ti. Únete a nuestra comunidad y empieza hoy tu transformación. ¡Te esperamos!</span> </p>
              </div>

              <div class="center-img">
                <img class="img-present" src="img/Principal/presentacion.jpg" alt="">
              </div>
        </section> 



        <!-- Imagenes introduccion -->
     <section class="carrusel-img">
        <div id="carouselExampleIndicators" class="carousel slide">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/Principal/carrousel/musculacion.jpg" class="d-block w-100" alt="">
            </div>
            <div class="carousel-item">
              <img src="img/Principal/carrousel/crossfit.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="img/Principal/carrousel/boxeo.jpg" class="d-block w-100" alt="...">
            </div>
            <!-- <div class="carousel-item fin">
              <img src="img/Principal/carrousel/funcional.jpg" class="d-block w-100" alt="...">
            </div> -->
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </section>
        <!-- Tienda -->
        <section id="tienda" class="shop-text" >
          <div class="shopdiv">
            <i id="arrowShop" class="bi bi-arrow-down shop-arrow"></i>
            <h1 class="h1-tienda">TIENDA</h1>

          </div>
          
          <div id="shop" class="shop">
          
           <div class="cuadro">
              <img class="ancho" src="img/Principal/ActividadesLibres.jpg" alt="">
              <p class="precio">TODAS LAS ACTIVIDADES<br>
              $40.000</p>
              <button class="bprincipal"><a href="compra.php">COMPRAR</a></button>
             <!-- <p>Compra No Disponible</p> -->
              <p class="texto">¡Consigue acceso total a nuestro gimnasio! 🏋️‍♂️🔥 Disfruta de todas las actividades, entrena cuando quieras y a la hora que más te convenga. ¡Inscríbete hoy y lleva tu entrenamiento al siguiente nivel! 🚀</p>
          
            </div>

            <div class="cuadro">
             <img class="ancho" src="img/Principal/EntrenamientoMusculacion.jpg" alt="">
             <p class="precio">GIMNASIO<br>
             $20.000</p>
              <button class="bprincipal"><a href="compra.php">COMPRAR</a></button>
              <!-- <p>Compra No Disponible</p>  -->
              <p class="texto">¡Accede libremente a nuestro gimnasio! 🏋️‍♂️🔥 Entrena con el mejor equipamiento, a la hora que prefieras y sin restricciones. ¡Inscríbete hoy y lleva tu rendimiento al siguiente nivel! 🚀</p>
 
            </div>

            <div class="cuadro">
              <img class="ancho" src="img/Principal/EntrenamientoCrossfit.jpg" alt="">
              <p class="precio">CROSSFIT <br>
              $24.000</p>
              <button class="bprincipal"><a href="compra.php">COMPRAR</a></button>
              <!-- <p>Compra No Disponible</p>  -->
              <p class="texto">¡Desafía tus límites con CrossFit! 💪🔥 Entrena fuerza, resistencia y velocidad con rutinas intensas. Supera cada reto, mejora tu condición y transforma tu cuerpo. ¡Inscríbete hoy y rompe tus barreras! 🚀</p>
            </div>

            <div class="cuadro">
              <img class="ancho" src="img/Principal/EntrenamientoFuncional.jpg" alt="">
             <p class="precio">FUNCIONAL <br>
              $15.000</p>
              <button class="bprincipal"><a href="compra.php">COMPRAR</a></button>
              <!-- <p>Compra No Disponible</p>  -->
              <p class="texto">¡Entrena como nunca con Funcional! ⚡ Mejora fuerza, agilidad y resistencia con ejercicios dinámicos. Potencia tu rendimiento y alcanza tu mejor versión. ¡Únete hoy y siente el cambio en cada entrenamiento! 🚀</p>
          
            </div>

            <div class="cuadro">
             <img class="ancho" src="img/Principal/EntrenamientoBoxeo.jpg" alt="">
              <p class="precio">BOXEO <br>
             $20.000</p>
              <button class="bprincipal"><a href="compra.php">COMPRAR</a></button>
              <!-- <p>Compra No Disponible</p>  -->
              <p class="texto">¡Golpea fuerte y entrena con intensidad! 🥊🔥 Mejora tu velocidad, coordinación y resistencia mientras te pones en forma. Libera estrés y fortalece tu mente. ¡Inscríbete hoy y conviértete en tu mejor versión! 🚀</p>
            </div>
          

          
          </div>
        </section>  
        <!-- Fin De Tienda -->
         <!-- Comienzo Contactarse -->

        <?php
         include("conexion.php"); //Acá incluimos el archivo con la conexión
         include("control_form.php"); //Acá inlcuimos el archivo con el control del registro
        ?>
          <section id="contactanos" class="contacto">
            <div class="contac">
              <form action="principal.php" method="POST">
                <h1>CONTÁCTANOS!!!</h1>
                <label for="">Tu Nombre</label>
                <br>
                <input type="text" required name="nombreForm" >
                <br>
                <label for="" >Tu Email</label>
                <br>
                <input type="email" name="emailForm" required>
                <br>
                <label for="">Asunto</label>
                <br>
                <input type="text" name="asunto" required>
                <br>
                <label for="">Tu Mensaje</label>
                <br>
                <input class="msj" type="text" name="texto" required>
                <br>
                <button class="btn1" type="submit">Enviar</button>
              </form>
            </div>
            <div class="redes">
              <a href="https://www.instagram.com/workout.funcionalgym/?hl=es" target="_blank"><i class="bi bi-instagram ig"></i></a>
              <a href="https://www.tiktok.com/@fitness_university1?lang=es" target="_blank"><i class="bi bi-tiktok "></i></a>
              <a href="https://www.youtube.com/user/gymvirtual" target="_blank"><i class="bi bi-youtube ytb"></i></a>
            </div>
          </section>

    </main>
    <script src="app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>