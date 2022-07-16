

<!doctype html>
<html lang="es">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <title>Integrador</title>
  </head>

  <body>
      <!--  inicio Header-->
      <header id="tickets">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-4 ">
            <div class="container-fluid ">
              <a class="navbar-brand" href="index.html"><img class="logoCodo" src="img/codoacodo.png" alt="logo"> Conf Bs As</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNav">
                <ul class="navbar-nav ">
                  <li class="nav-item ">
                    <a class="nav-link active" aria-current="page" href="#">La conferencia</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Los oradores</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">El lugar y la fecha</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">conviertete en orador</a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link text-success" href="tickets.html" >Comprar tickets</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="registro.html">Registro</a>
                  </li>
                </ul>
              </div>
            </div>
        </nav>
      </header>
      <?php
        echo "<h1>"."Actualizar datos del ID: ". $_GET['id']."</h1>";
        
      ?>
      <section class="container mt-5">
        <form class="row g-3 " action="actualizar.php" method="post">
          <div class="col-md-6">          
              <label for="nombre" class="form-label">ID</label>
              <input class="form-control" type="text" value="<?php echo $_GET['id']?>" readonly id="id" name="id">
          </div>  

          <div class="col-md-6">          
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre">
          </div>
          <div class="col-md-6">
            <label for="apellido" class="form-label">Apellido</label>
            <input type="text" class="form-control" id="apellido" name="apellido">
          </div>
          <div class="col-md-6">
            <label for="mail" class="form-label">Email</label>
            <input type="email" class="form-control" id="mail" name="mail">
          </div>
          <div class="col-md-6">
            <label for="clave" class="form-label">Nueva Clave</label>
            <input type="password" class="form-control" id="clave" name="clave">
          </div>          
          <div class="col-md-6">
            <label for="edad" class="form-label">Edad</label>
            <input type="number" class="form-control" id="edad" name="edad">            
            
          </div>
          <div class="col-12">
            <button type="submit" class="btn btn-primary" value="Enviar">Actualizar</button>
          </div>
          
        </form>
      </section>


        <footer class="fixed-bottom">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-4">
              <div class="container-fluid">            
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class=" container navbar-nav d-flex justify-content-center">
                    <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="#">Preguntas Frecuentes</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Contáctanos</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Prensa</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link">Conferencias</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link">Términos y condiciones</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link">Privacidad</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link">Estudiantes</a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
          </footer>
    
    
        <script src="Js/ticketjs.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
  </body>
</html>