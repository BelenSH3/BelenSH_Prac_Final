<?php
session_start();
if (isset($_SESSION['nombre'])) {
    # code...
    if ($_SESSION['usuario'] !=1) {
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
    <title>Registro</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.html">Pagina de inicio</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      
          <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link active" href="home.php">Inicio de sesion
                  <span class="visually-hidden">(current)</span>
                </a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="agregar.php">Registro Nuevo_publicador</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="registro_n.php">Registro Nuevo_Admin</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="registro_n.php">Registro Nuevo_Sup.Grupo</a>
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
    
<form action="validacion_r.php" method="POST">
  <!--<fieldset>-->
    <!--<legend>Legend</legend>
    <div class="form-group row">
      <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-10">
        <input type="text" readonly="" class="form-control-plaintext" id="staticEmail" value="email@example.com">
      </div>
    </div>-->
   
    <div class="form-group">
      <label for="nombre1" class="form-label mt-4">Nombre</label>
      <input type="text" class="form-control" name="nombre1" id="nombre1" placeholder="Nombre">
    </div>

    <div class="form-group">
      <label for="apllidop" class="form-label mt-4">Apellido Paterno</label>
      <input type="text" class="form-control" name="apep1" id="apep1" placeholder="Apellido Paterno">
    </div>
 
    <div class="form-group">
      <label for="apellidom" class="form-label mt-4">Apellido Materno</label>
      <input type="text" class="form-control" name="apem1" id="apem1" placeholder="Apellido Materno">
    </div>

    <div class="form-group">
      <label for="Email1" class="form-label mt-4">Email address</label>
      <input type="email" class="form-control" name="email1" id="email1" aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">Nunca compartiremos su correo electrónico con nadie más.</small>
    </div>


    <div class="form-group">
      <label for="exampleInputPassword1" class="form-label mt-4">Password</label>
      <input type="password" class="form-control" name="pass1" id="pass1" placeholder="Password">
    </div>

    <div class="form-group">
      <label for="usuario">Tipo de usuario: </label><br>
      <input type="text" name="usuario" id="usuario"><br>
   </div>
   
<br><br>
    <div class="form-group" >
      <input type="submit" value="Registrar" class="btn btn-lg btn-primary">
    </div> 

</form> 

<br><br><br><br><br><br><br><br><br><br><br>


</body>
</html>