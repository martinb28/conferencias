

<?php
include 'functions/conexion.php';

$consultas = mysqli_query($conexion, "select * from usuarios");

$usuario = $_POST['usuario'];
$password = $_POST['password'];

if($usuario=="admin" && $password=="123456"){

  


  ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
<body>
    
<h1>Bienvenido ADMIN</h1>

<table class="table">
  <thead>
    <tr class="table-warning">
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Mail</th>
      <th scope="col">Edad</th>      
      <th scope="col">Eliminar</th>
      <th scope="col">Editar</th>
    </tr>
  </thead>
  <tbody>
    <?php while($filaTD = $listado2022 = mysqli_fetch_array($consultas)) { ?>
    <tr class="table-info">
      <th scope="row"> <?php echo $filaTD['id_usuarios']; ?> </th>
      <th scope="row"> <?php echo $filaTD['nombre']; ?> </th>
      <th scope="row"> <?php echo $filaTD['apellido']; ?> </th>
      <th scope="row"> <?php echo $filaTD['correo']; ?> </th>
      <th scope="row"> <?php echo $filaTD['edad']; ?> </th>
      <th scope="row"> <a href="eliminar.php?id=<?php echo $filaTD['id_usuarios']; ?>"> ELIMINAR </a> </th>

      <th scope="row"> <a href="update.php?id=<?php echo $filaTD['id_usuarios']; ?>"> EDITAR</a> </th>
    </tr>
    <?php } ?>

  </tbody>
</table>



</body>
</html>


<?php

}else{

  echo "usted no puede ingresar";



}


?>