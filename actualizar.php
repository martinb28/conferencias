<?php

include 'functions/conexion.php';

$id = $_GET['id'];

$queryUpdate = "UPDATE usuarios SET nombre= 'Carlitos' WHERE id_usuarios = $id";

$resultadoUpdate = mysqli_query($conexion, $queryUpdate);

if($resultadoUpdate){
     echo "Se actualizaron los datos";    
 }else{
     echo "No se pudo realizar";
}

?>