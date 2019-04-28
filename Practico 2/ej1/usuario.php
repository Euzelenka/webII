<?php
function getUsuarios(){

  $db = new PDO('mysql:host=localhost;'.'dbname=usuariodeuda;charset=utf8', 'root', '');
  $sentencia = $db->prepare( "select * from usuario");
  $sentencia->execute();
  return $sentencia->fetchAll(PDO::FETCH_ASSOC);

}
 ?>
