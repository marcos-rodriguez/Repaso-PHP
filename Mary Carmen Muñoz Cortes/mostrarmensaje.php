<?php
session_start();

print_r($_SESSION);
$nombre=$_SESSION['nombreusuario'];

$_SESSION['acceso']= date("d-m");
echo "<br>Bienvenido... ".$nombre;
echo $_GET['id'];
echo "<br>Hoy es ... ".$_SESSION['acceso']."<br>";
print_r($_SESSION);
?>