<?php
session_start();
if (isset($_SESSION['nombre'])) {
    # code...
    if ($_SESSION['usuario'] !=3) {
        # code...
        header('Location: login.php');
    }
}
else {
    # code...
    header('Location: login.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="bootstrap.css">
    <title>Mi base de datos</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Pagina de inicio</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      
          <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link active" href="login.php">Inicio de sesion
                  <span class="visually-hidden">(current)</span>
                </a>
              </li>
              
              <!--<li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Separated link</a>
                </div>
              </li>-->
            </ul>
            <form class="d-flex">
              <input class="form-control me-sm-2" type="text" placeholder="Buscar">
              <button class="btn btn-secondary my-2 my-sm-0" type="submit">Buscar</button>
            </form>
          </div>
        </div>
      </nav>
      <div class="alert alert-dismissible alert-warning">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <h4 class="alert-heading">Bienvenido!! ;) <?php echo $_SESSION['nombre'] ?> </h4>
  <p class="mb-0">  <a href="cerrar1.php" class="alert-link">Cerrar Session</a>.</p>
  
</div>

 <form action="agregarproceso.php" method="POST">
      <div class="form-group">
         <label class="col-form-label mt-4" for="Nombre">Nombre(s)</label>
         <input type="text" class="form-control" name="nom" placeholder="Nombre(s)" id="nom">
     </div>

     <div class="form-group">
         <label class="col-form-label col-form-label-sm mt-4" for="apellidopaterno">Apellido Paterno</label>
         <input type="text" class="form-control form-control-sm"  name="app3" id="app3" placeholder="Apellido Paterno" >
     </div>

     <div class="form-group">
         <label class="col-form-label col-form-label-sm mt-4" for="apellidomaterno">Apellido Materno</label>
         <input type="text" class="form-control form-control-sm"  name="apm3" id="apm3" placeholder="Apellido Materno">
     </div>

     <div class="form-group">
         <label class="col-form-label col-form-label-sm mt-4" for="txthoras">Horas</label>
         <input type="text" class="form-control form-control-sm"  name="horas" id="horas" placeholder="Horas">
     </div><br>

     <div class="form-group">
         <label class="col-form-label col-form-label-sm mt-4" for="txtestudios">Estudios</label>
         <input type="text" class="form-control form-control-sm"  name="estudios" id="estudios" placeholder="Estudios">
     </div><br>

     <div class="form-group">
         <label class="col-form-label col-form-label-sm mt-4" for="txtrevisitas">Revisitas</label>
         <input type="text" class="form-control form-control-sm"  name="revisitas" id="revisitas" placeholder="Revisitas">
     </div><br>

     <div class="form-group">
         <label class="col-form-label col-form-label-sm mt-4" for="txtvideos">Videos</label>
         <input type="text" class="form-control form-control-sm"  name="videos" id="videos" placeholder="Videos">
     </div><br>

     <div class="form-group">
         <label class="col-form-label col-form-label-sm mt-4" for="txtdetalles">Detalles</label>
         <input type="text" class="form-control form-control-sm"  name="det" id="det" placeholder="Detalles">
     </div><br>


         <div class="form-group" >
             <input type="submit" value="Agregar" class="btn btn-lg btn-primary">
         </div>
         <br><br>
         <br><br><br><br>
     </div>
 </form>










</body>




</html>      