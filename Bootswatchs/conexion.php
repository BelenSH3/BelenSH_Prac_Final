<?php
///$pdo (PDO = objetos de datos en php)
$link = new PDO('mysql:host=localhost;port=3306;dbname=mibasephp','root','mysql');

///see the "errors" folder fpr details....
$link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//Check connection
/*
if ($link->connect_error){
    echo "error de coneccion";
}
else {
    echo "<h1>coneccion exitosa!! :)</h1>";
}*/

if (!$link) {
    # code...
    echo "error de coneccion";
}
else {
    # code...
   // echo "buena conexion";
}

?>