<?php
include("conexion.php");
$nomUser= $_POST['email']; //Guardo lo ingresado en el input Usuario, enviado por POST
$nomPass= $_POST['contraseña'];//Guardo lo ingresado en el input Contraseña, enviado por POST

$query = mysqli_query($conexion, "SELECT * FROM datos where email = '$nomUser' and contraseña = '$nomPass'");
$nro=mysqli_num_rows($query);

if ($nro == 1) {
	header('Location: principal.php');
}
else if($nro == 0){
	//echo "No ingresaste locura";
	header('Location: error.php');
}

?>