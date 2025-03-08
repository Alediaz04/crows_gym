<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="styletrivia.css">
    <link rel="stylesheet" href="css/responsive-trivia.css">
    <title>Trivia-Crows Gym </title>
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
            <a href="principal.php"><img class="logo" src="img/logo.png" alt="No Image"></a>
            
            <div class="nav">
              
                <a href="principal.php">IR A INICIO</a>
                <a href="trivia.php">TRIVIA</a>
                
            </div>

            <?php  
              echo "<h1 class='nombre'> Bienvenido $usuarioMostrar</h1>"; 
              ?>
          <style>
            .nombre{
              color: red;
              font-size: 20px;
              margin-right: 20px;
            }
          </style>
          
            <!-- <button class="btn-head"><a href="index.php">INICIAR SESIÓN</a></button> -->
        </div>


    </header>

    
    <section class="trivia">
      <h1 class="tittle">TRIVIA</h1>
      <!-- pregunta 1 -->
      <div class="trione">
        <h3>¿Para que sirve consumir creatina?</h3>
         <button class="incorrect btn1" onclick="quiz1( 1, this)">Mejora el sistema nervioso</button>
         <button id="correct" class="btn1" onclick="quiz1( 2, this)">Mejora la fuerza y aumenta la masa muscular</button>
         <button class="incorrect btn1" onclick="quiz1( 3, this)">Ayuda con la perdida de peso</button>
         <button class="incorrect btn1" onclick="quiz1( 4, this)">Reduce el riesgo de lesiones en ligamentos</button>

      </div>

      <!-- pregunta 2 -->
      <div class="trione">
        <h3>¿Cuál de los siguientes ejercicios es ideal para trabajar los músculos del pecho?</h3>
         <button class="incorrect btn2" onclick="quiz2( 1, this)">Sentadilla con barra</button>
         <button class="incorrect btn2"  onclick="quiz2( 2, this)">Curl de biceps</button>
         <button id="correct" class="btn2" onclick="quiz2( 3, this)">Press Banca</button>
         <button class="incorrect btn2" onclick="quiz2( 4, this)">Jalones al pecho</button>
         
      </div>

      <!-- Pregunta 3 -->
      <div class="trione">
        <h3>¿Qué tipo de entrenamiento combina alta intensidad con intervalos de descanso cortos?</h3>
         <button id="correct" class="btn3" onclick="quiz3( 1, this)">HIIT</button>
         <button class="incorrect btn3"  onclick="quiz3( 2, this)">Zumba</button>
         <button class="incorrect btn3"  onclick="quiz3( 3, this)">Boxeo</button>
         <button class="incorrect btn3"  onclick="quiz3( 4, this)">CrossFit</button>
         
      </div>

      <!-- Pregunta 4 -->
      <div class="trione">
        <h3>¿Qué se recomienda consumir después de un entrenamiento para ayudar en la recuperación muscular?</h3>
         <button class="incorrect btn4" onclick="quiz4( 1, this)">Bebidas Energeticas</button>
         <button id="correct" class="btn4"  onclick="quiz4( 2, this)">Proteina</button>
         <button class="incorrect btn4"  onclick="quiz4( 3, this)">Carbohidratos</button>
         <button class="incorrect btn4" onclick="quiz4( 4, this)">Licuado de frutas</button>
         
      </div>

      <!-- pregunta 5 -->
      <div class="trione">
        <h3>¿Cuál de los siguientes ejercicios es ideal para trabajar los músculos de la espalda?</h3>
         <button class="incorrect btn5" onclick="quiz5( 1, this)">Prensa</button>
         <button class="incorrect btn5" onclick="quiz5( 2, this)">Curl Araña</button>
         <button class="incorrect btn5"  onclick="quiz5( 3, this)">Press inclinado</button>
         <button id="correct" class="btn5"  onclick="quiz5( 4, this)">Remo Con Barra</button>
         
      </div>
      <div class="botones">
        <button class="btn-restart" onclick="restartContent()">restart game</button>
        <button class="btn-result" onclick="scoreFinal()">resultado</button>
      </div>
      <div class="volver">
        <button class="btn-volver"><a href="principal.php">VOLVER</a></button>
      </div>
      

      

            

    </section>
    
    
</body>
<script src="trivia.js"></script>
</html>