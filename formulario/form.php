<?php
 if (isset($_POST["nombre"]) && isset($_POST["email"]) && $_POST["nombre"]!=" " && $_POST["email"]!=" ") {
   $nombre = $_POST["nombre"];
   $email = $_POST["email"];
   echo "<h1>El nombre es: $nombre</h1>";
   echo "El email es: $email";
 }
 else {
   echo "Introduzca Nombre y mail";
 }
 ?>
