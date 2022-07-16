<?php

include 'functions/conexion.php';

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['mail'];
$clave = $_POST['clave'];
$edad = $_POST['edad'];

//$queryUpdate = "UPDATE usuarios SET apellido = 'Bugao', nombre= 'Martin', correo = 'bugao1991gmail.com', edad = 30, clave = 123456 WHERE id_usuarios = $id";
$queryUpdate = "UPDATE usuarios SET apellido = '$apellido', nombre= '$nombre', correo = '$email', edad = $edad, clave = '$clave' WHERE id_usuarios = $id";

$resultadoUpdate = mysqli_query($conexion, $queryUpdate);

if($resultadoUpdate){
  echo "Se actualizaron los datos";    
}else{
  echo "No se pudo realizar";
}

header('Refresh: 2; url=admin.php');

?>