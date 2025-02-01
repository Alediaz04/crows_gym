<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicia Sesión/ CROWS-GYM</title>
    <link rel="icon" href="img/icon.png" type="image/png">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive-loggin.css">

</head>
<body>
    <main>

        <section class="login"> 
            <div >
                <img src="img/loggin/crow logo prueba.png" alt="">

            </div>
            <div>
                <form action="login.php" method="post">
                <label class="lab1">Email:</label><br>
                <input type="email" class="inp1" name="email" required ><br>
                <label class="lab2">Contraseña:</label><br>
                <input type="password" class="inp2" name="contraseña" required><br>
                <a href="https://th.bing.com/th/id/OIP.E5HzHoT3xEko6US-5xyOJAAAAA?rs=1&pid=ImgDetMain" class="contra" target="_blank">¿Olvidaste tu contraseña?</a>
                <button type="submit" class="btn">INICIAR SESIÓN</button>
                </form>
                <p>No estas registrado? <a href="registro.php" class="register">REGISTRATE</a></p>


            </div>
            

        </section>
        
        
    </main>
    
</body>
</html>