<?php

include 'functions/conexion.php';

$id = $_GET['id'];

$queryDelete = "DELETE FROM usuarios WHERE id_usuarios = $id";

$resultadoDelete = mysqli_query($conexion, $queryDelete);

if($resultadoDelete){
     echo "Se elimino el registro de forma correcta";    
 }else{
     echo "por un problema X no se elimino";     
}

header('Refresh: 2; url=admin.php');

?>