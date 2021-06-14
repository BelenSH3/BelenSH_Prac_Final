<?php  
session_start();

require 'conexion.php'; 

$correo = $_POST['Email2'];
$pas = $_POST['Pass2'];

$qry = $link->prepare( "SELECT * FROM usuario WHERE correo=?");
$qry->execute([$correo]);
$row = $qry->fetch(PDO::FETCH_OBJ);
//print_r($row);

if (password_verify($pas,$row->contrasena)) {
    # code...
    $_SESSION['nombre'] = $row->nombre;
    $_SESSION['usuario'] = $row->id_tipousuario;
    
    switch ($_SESSION['usuario']) {
        case 1:
            # code...
            header('Location: admin1.php');
            break;
      case 2:
         header("Location: home.php");
      break;
      case 3:
          # code...
          header('Location: publicador.php');
          break;
      default:
            # code...
            break;
    }
}
else {
    # code...
    header("Location: login.php");
}



?> 