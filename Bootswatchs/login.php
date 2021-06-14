<?php
session_start();
if (isset($_SESSION['usuario'])) {
    # code...
    switch ($_SESSION['usuario']) {
      case 1:
        # code...
        header('Location: admin1.php');
        break;
     case 2:
          # code...
          header('Location: home.php');
          break;
      case 3:
            # code...
            header('Location: publicador.php');
            break;
      
      default:
        # code...
        echo "No existe";
        header('Location: login.php');
        break;
    }
} 
?>

<!DOCTYPE html> 
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="bootstrap.css">
    <title>Inicio_sesion</title>
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
                <a class="nav-link active" href="login.php">Inicio de sesion
                  <span class="visually-hidden">(current)</span>
                </a>
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
    
<form action="validar_lo.php" method="POST">
  <!--<fieldset>-->
    <!--<legend>Legend</legend>
    <div class="form-group row">
      <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-10">
        <input type="text" readonly="" class="form-control-plaintext" id="staticEmail" value="email@example.com">
      </div>
    </div>-->

    <div class="form-group">
      <label for="email2" class="form-label mt-4">Email address</label>
      <input type="email" class="form-control" name="Email2" id="Email2" aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">Nunca compartiremos su correo electrónico con nadie más.</small>
    </div>
    <div class="form-group">
      <label for="Password" class="form-label mt-4">Password</label>
      <input type="password" class="form-control" name="Pass2" id="Pass2" placeholder="Password">
    </div>
    <br><br>
    <div class="form-group" >
      <input type="submit" value="Iniciar sesion" class="btn btn-lg btn-primary">
    </div>
</form>  




</body>
</html>