<?php
session_start();
if (isset($_SESSION['nombre'])) {
  # code...
  if($_SESSION['usuario'] !=2){
     header('Location: login.php');
  } 
}
else{
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
              <li class="nav-item">
              <a class="nav-link" href="registro_n.php">Registro Nuevo_publicador</a>
              
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
  <p class="mb-0">  <a href="cerrar1.php" class="alert-link">Cerrar Sistema</a>.</p>
  <p class="mb-0">  <a href="agregar.php" class="alert-link">Agregar nuevo registro</a>.</p>
  <p class="mb-0">  <a href="archivo.php">Descargar</a>.</p>
</div>


<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">id_usuario</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido Materno</th>
      <th scope="col">Apellido Paterno</th>
      <th scope="col">Horas</th>
      <th scope="col">Estudios</th>
      <th scope="col">Revisitas</th>
      <th scope="col">Videos</th>
      <th scope="col">Detalles</th>
    </tr>
    <tbody>

    <?php
    
    require "conexion.php";
    $qry =$link->prepare("SELECT * FROM grupouno");
    $qry->execute();
    $row = $qry->fetchAll(PDO::FETCH_OBJ);
    //print_r($row);

     foreach($row as $dato){
  ?>

   
      <tr class="table-active">
        <th scope="row"><?php echo $dato->id_usuarios; ?></th>
        <td><?php echo $dato->nombre; ?></td>
        <td><?php echo $dato->apep; ?></td>
        <td><?php echo $dato->apm; ?></td>
        <td><?php echo $dato->horas; ?></td>
        <td><?php echo $dato->estudios; ?></td>
        <td><?php echo $dato->revisitas; ?></td>
        <td><?php echo $dato->videos; ?></td>
        <td><?php echo $dato->detalles; ?></td>
        <td><a href="editar1.php?id=<?php echo $dato->id_usuarios ?>">Editar</a></td>
        <td><a href="eliminar1.php?id=<?php echo $dato->id_usuarios ?>">Eliminar</a></td>
      </tr>
    
  <?php
   }
   ?>
   </tbody>
  </thead>
  </table>
















    
</body>
</html>