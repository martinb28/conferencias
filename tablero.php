<?php
include 'conexion.php';

$consultas = mysqli_query($conexion, "select * from usuarios");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    
</head>
<body>
<table class="table">
  <thead>
    <tr class="table-warning">
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Mail</th>
      <th scope="col">Edad</th>
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
    </tr>
    <?php } ?>

  </tbody>
</table>

    
</body>
</html>