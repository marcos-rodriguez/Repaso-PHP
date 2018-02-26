<?php
session_start();

if(isset($_SESSION['login'])){
 echo "<br>Bienvenido... ".$_SESSION['nombreusuario']."<a href='salir.php'>salir</a>";  
}else{
   


$nombre=$_POST['form_usuario'];
$nombre;

if(isset($_POST['form_boton']) and (!empty($_POST['form_usuario'])) and (!empty($_POST['form_contrasena']))){
   echo "Bienvenido... ".$nombre;
   $_SESSION['nombreusuario']=$nombre;
   $_SESSION['login']="yes";
   
   for($i=1;$i<10;$i++){
      echo "<br>Leer mensaje <a href='mostrarmensaje.php?id=".$i."'>".$i."</a>";
      echo "<br>Bienvenido... ".$_SESSION['nombreusuario'];

echo "<br>Hoy es ... ".$_SESSION['acceso']."<br>";
   }
   
   
    
}else{
    echo "debes llenar el <a href='index.php'>formulario</a>";
}
}


?>