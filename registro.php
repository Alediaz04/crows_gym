<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Cuenta-CROWS-GYM</title>
    <link rel="icon" href="img/icon.png" type="image/png">
   
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="styleregistro.css">
    <link rel="stylesheet" href="css/responsive-registro.css">
    
</head>
<body>  
    <main>
    <?php
        include("conexion.php"); //Acá incluimos el archivo con la conexión
        include("control_registro.php"); //Acá inlcuimos el archivo con el control del registro
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
    
</body>
</html>