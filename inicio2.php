<?php
$m = $_GET['num_mesa'];
$s = $_GET['contraseña'];
$q = "select * from mesas, fiscales where id_mesa = $m and mesas.id_fiscales=fiscales.id_fiscales"
?>


 