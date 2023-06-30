<?php
//archivo que se encarga de la conexion a la base de datos
$dbip="localhost";
$dbuser="root";
$dbpass="";
$dbname="paso";
//conexion
$con=mysqli_connect($dbip, $dbuser, $dbpass, $dbname);
if(mysqli_connect_errno()){
    echo'conexion fallida :'   , mysqli_connect_error();
    exit();
}
?>