<?php

include 'functions/conexion.php';


$apellido = $_POST['apellido'];
$nombre = $_POST['nombre'];
$correo = $_POST['mail'];
$edad = $_POST['edad'];
$clave = $_POST['clave'];

$sqlInsert = "INSERT INTO usuarios(id_usuarios, apellido, nombre, correo, edad, clave)
VALUES(NULL, '$apellido', '$nombre', '$correo', $edad, '$clave')";

$insert = mysqli_query($conexion, $sqlInsert);

echo "Registrado exitosamente";

?>



