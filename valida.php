<?php

$nombre=$_POST['form_usuario'];
echo $nombre;
print_r($_POST);
if(isset($_POST['form_boton']) and empty($_POST['form_usuario'])and empty($_POST['form_contrasena'])){
   echo "Bienvenido... ".$nombre;
   print_r($_POST); 
}else{
    echo "debes llenar el <a href='index.php'>formulario</a>";
}



?>