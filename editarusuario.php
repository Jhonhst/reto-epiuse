<?php

include_once 'conexion.php';


if($_GET){
  $id=$_GET['id'];
  $sql_unico= 'SELECT * FROM  usuarios WHERE id=?';
  $gsent_unico= $pdo->prepare($sql_unico);
  $gsent_unico->execute(array($id));
  $resultado_unico=$gsent_unico->fetch();

}
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
        <form class="form-inline mt-2 mt-md-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
    <!-- fin navbar -->

    <!-- inicio tabla de usuario a editar --> 
    <div class="col-12">
      <h2>EDITAR ELEMENTOS</h2>
         <form method="POST" action="modificarusuario.php" >
            Agregar Nuevo Usuario:
            <input type="text" class="form-control" name="usuario" value="<?php echo $resultado_unico['usuario']; ?>">
            Agregar Nuevo Correo:
            <input type="text" class="form-control mt-3" name="correo" value="<?php echo $resultado_unico['correo']; ?>">
            Agregar Nuevo Contrasenia:
            <input type="text" class="form-control mt-3" name="contrasenia" value="<?php echo $resultado_unico['contrasenia']; ?>">
            Agregar verifique contraseña:
            <input type="text" class="form-control mt-3" name="contraseniados" value="<?php echo $resultado_unico['cotraseniados']; ?>">
            <input type="hidden" name="id" value="<?php echo $resultado_unico['id']; ?>">
            
            <input type="submit" class="btn btn-primary mt-3" value="editar">
         </form>
         
         </div>
    <!-- fin de tabla usuarios a editar -->

  

    <!-- js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-slim.min.js"><\/script>')</script>
    <script src="js//popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>