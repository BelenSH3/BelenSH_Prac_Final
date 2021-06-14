<?php
require 'conexion.php';

$id = $_GET['id'];

$qry = $link->prepare("SELECT * FROM grupouno WHERE id_usuarios = ?");
$qry->execute([$id]);
$row = $qry->fetch(PDO::FETCH_OBJ);
//print_r($qry);
?>

<!DOCTYPE html>
<html>

<head> 

  <meta charset="UTF-8">
  <link rel="stylesheet" href="bootstrap.css">
  <title>Base de datos PHP EDITAR</title>

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
              </li>
              <li class="nav-item">
              <a class="nav-link" href="registro_n.php">Registro Nuevo_publicador</a>
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
   <center>
     <h1>EDITAR</h1>    

      <form action="editar_p.php" method="POST">
         <label for="txtapellidos">id_usuario</label><br>
         <input type="text" readonly="" name="staticID" id="staticID" value="<?php echo $row->id_usuarios ?>"><br>

         <label for="txtNombre">Nombre</label><br>
         <input type="text" readonly=""  id="staticnom" value="<?php echo $row->nombre ?>"><br>

         <label for="txtapellidos">Apellidos</label><br>
         <input type="text" readonly=""  id="staticapp" value="<?php echo $row->apep?>"><br>
         <input type="text" readonly=""  id="staticapm" value="<?php echo $row->apm ?>"><br>

         <label for="txthoras">Horas </label><br>
         <input type="text" name="horas4" id="horas4" value="<?php echo $row->horas ?>"><br>

         <label for="txtestudios">Estudios</label><br>
         <input type="text" name="estudios4" id="estudios4" value="<?php echo $row->estudios ?>"><br>

         <label for="txtrevisitas">Revisitas</label><br> 
         <input type="text" name="revisitas4" id="revisitas4" value="<?php echo $row->revisitas ?>"><br>
         
         <label for="txtvideos">Videos</label><br>
         <input type="text" name="videos4" id="videos4" value="<?php echo $row->videos ?>"><br>
         
         <label for="txtdetalles">Detalles</label><br>
         <input type="text" name="detalles4" id="detalles4" value="<?php echo $row->detalles ?>"><br>
         
         <input type="submit" value="Editar">   
     </center>

</body>



</html>      