<?php

session_start();
require 'conexion.php';

$nomb1=$_POST['nombre1']; 
$app=$_POST['apep1'];
$apm=$_POST['apem1'];
$email=$_POST['email1'];
$pas1=$_POST['pass1'];
$usu=$_POST['usuario'];

$pas1 = password_hash($pas1, PASSWORD_DEFAULT);

$qry= $link->prepare("INSERT INTO usuario (nombre,apellidopat,apellidomat,correo,contrasena,id_tipousuario) VALUES (?,?,?,?,?,?)");
$qry->execute([$nomb1,$app,$apm,$email,$pas1,$usu]);

echo "<br>";

if ($qry->rowCount()==0) {
    # code...
    echo "REGISTRO FALLIDO";
}
elseif ($qry->rowCount()==1) {
    # code...
    echo "SE REGISTRO EXITOSAMENTE";
}
else { 
    # code...
    echo "ERROR DEL SISTEMA";
}


?>