<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Cuenta-CROWS-GYM</title>
    <link rel="icon" href="img/icon.png" type="image/png">
   
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="styleregistro.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="css/responsive-registro.css">
    
</head>
<body>  
    <main>
    <?php
        include("conexion.php");
        include("control_registro.php"); 
    ?>
           <div class="formulario"> 
                <img class="titulo" src="img/TITULO MARCA.png" alt="">
                <h1>CREAR CUENTA</h1>
                <p>UNETE A NOSOTROS!</p>
                <div class="center">
                   <form action="registro.php" method="post">
                       <label for="">Nombre</label><br>
                       <input type="text" name="nombre" placeholder="Tu Nombre" required>
                       <br>

                       <label for="">Email</label><br>
                       <input type="email" name="email" placeholder="tuemail@gmail.com" required>
                       <br>
                       <label for="">Contraseña</label><br>
                       <input type="password" name="contraseña" placeholder="Introduce Una Contraseña" required>
                       <br>
                       <label for="">Teléfono</label><br>
                       <input type="tel" name="telefono" placeholder="(Opcional)">
                       <br>
                       <label for=""> Fecha De Nacimiento</label><br>
                       <input type="date" name="fecha" required>
                       <br>
                       <span class="account">¿ya tienes una cuenta? <a href="index.php" class="inic-ses">Inicia Sesión</a></span>

                       <button type="submit" name="registro">CREAR CUENTA</button>  
                
                    </form>
                </div>
            </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>