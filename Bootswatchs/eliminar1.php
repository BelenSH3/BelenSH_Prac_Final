<?php


$id = $_GET['id'];
include 'conexion.php';
$qry = $link->prepare("DELETE FROM grupouno WHERE id_usuarios = ?");
$qry->execute([$id]);


if ($qry->rowCount()==1) {
    # code...
    echo "Eliminacoin exitosa!!";
    header("Location: home.php");
} 
else {
    # code...
    echo "Eliminacion Fallida";
    header("Location: home.php");
}


?>