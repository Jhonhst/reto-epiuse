<?php

include_once 'conexion.php';

$sql_leer= 'SELECT * FROM  usuarios';

$gsent= $pdo->prepare($sql_leer);
$gsent->execute();

$resultado=$gsent->fetchAll();

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="icono">

    <title>Usuario admin</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/navbar-top-fixed.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>

  <body>

    <!--inicio Navbar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="index.html">Mi Tienda admin</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <!-- <ul class="navbar-nav ml-auto ">
          <li class="nav-item">
            <a class="nav-link" href="#">ingresar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">registrarse</a>
          </li>
        </ul> -->
        <form class="form-inline mt-2 mt-md-0" action="buscar.php" method="POST">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="name">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
    <!-- fin navbar -->

    <!-- inicio tabla de usuarios --> 
    <div class="col-12">
        <div class="card my-4" id="task-result">
            <table class="table table-bordered table-sm">
                <thead>
                    <tr>
                        <td>Id</td>
                        <td>Usuario</td>
                        <td>Correo</td>
                    </tr>
                </thead> 
                <tbody>
                    <?php foreach($resultado as $dato): ?>
                    <tr>
                        <td><?php echo $dato['id'] ?></td>
                        <td><?php echo $dato['usuario'] ?></td>
                        <td><?php echo $dato['correo'] ?></td>
                        <td><a href="editarusuario.php?id=<?php echo $dato['id'] ?>" class="float-right ml-3">editar</a></td>
                        <td><a href="eliminarusuario.php?id=<?php echo $dato['id'] ?>" class="float-right ml-3">eliminar</a></td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- fin de tabla usuarios -->

  
    <!-- inicio de paginacion -->

    <!-- fin de paginacion -->

    <!-- js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-slim.min.js"><\/script>')</script>
    <script src="js//popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>