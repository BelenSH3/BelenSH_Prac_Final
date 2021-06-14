<?php 
include 'conexion.php';

$n=$_POST['nom'];
$app=$_POST['app3']; 
$apm=$_POST['apm3'];
$hr=$_POST['horas'];
$et=$_POST['estudios'];
$rv=$_POST['revisitas'];
$vd=$_POST['videos'];
$dt=$_POST['det'];

/*
echo $n;
echo $app;
echo $apm;
echo $hr;
echo $et;
echo $rv;
echo $vd;
echo $dt;
*/

$qry= $link->prepare("INSERT INTO grupouno (nombre,apep,apm,horas,estudios,revisitas,videos,detalles) VALUES (?,?,?,?,?,?,?,?)");
$qry->execute([$n,$app,$apm,$hr,$et,$rv,$vd,$dt]);
$row=$qry->fetch(PDO::FETCH_OBJ);
//print_r($row);

if ($qry->rowCount()==1) {
    # code...
    echo "se agrego un nuevo dato";
    header("Location: home.php");
}
else {
    # code...
    echo "No fue posible hacer el nuevo registro";
    header("Location: agregar.php");

}

?>