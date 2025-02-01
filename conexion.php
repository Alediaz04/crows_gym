<?php
$server="127.0.0.1"; //nombre del servidor a utilizar
$user="root"; //nombre de usuario de la base de datos (root es el nombre habitual para los que no tienen definido un nombre de usuario en la base de datos)
$pass=""; //contraseña de la base de datos, en este caso al abrir y cerrar comillas indicamos que no tenemos contraseña
$db="crows_gym"; 

$conexion = mysqli_connect($server, $user, $pass, $db);

// $conexion = mysqli_connect("localhost", "root", "", "miercoles fs");
if (!$conexion) { 
	die("No hay conexion: ".mysqli_connect_error()); 
}
?>