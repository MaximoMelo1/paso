<?php

$u=$_GET['nombre'];
$c=$_GET['contraseña'];
require $_SERVER['DOCUMENT_ROOT'] . "inicio2.php";
$q="select * from mesas where usuario= '$u' and contraseña='$c' ";
$r=mysqli_query($con, $q);
if(mysqli_num_rows($r)>0){
    session_start();
    $_SESSION['mesas']=$u;
  header('inicio2.php');
}
else
{
  echo("los datos son incorrectos");
  header('');
}
?>