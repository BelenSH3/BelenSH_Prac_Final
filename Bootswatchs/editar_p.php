<?php
require 'conexion.php';

$id=$_POST['staticID'];
$h4=$_POST['horas4'];
$e4= $_POST['estudios4'];
$r4=$_POST['revisitas4'];
$v4=$_POST['videos4'];
$d4=$_POST['detalles4'];

$qry=$link->prepare("UPDATE grupouno SET horas=?, estudios=?, revisitas=?, videos=?, detalles=? WHERE id_usuarios=?");
$qry->execute([$h4,$e4,$r4,$v4,$d4,$id]);

if ($qry->rowCount()==1) {
    # code...
    header("Location: home.php");
}
else {
    # code...
    echo "ERROR EN LA ACTUALIZACION DE DATOS!!";
    header("Location: editar1.php");
}
?>
