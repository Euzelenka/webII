<?php

function connect() {
    return new PDO('mysql:host=localhost;'.'dbname=usuariodeuda;charset=utf8', 'root', '');
}

function getUsuarios() {

  $db = connect();
  $sentencia = $db->prepare( "select * from usuario");
  $sentencia->execute();
  return $sentencia->fetchAll(PDO::FETCH_ASSOC);

}

function addUsuario() {
  if(isset($_POST['formnombre']) && isset($_POST['formdireccion']) && isset($_POST['formtelefono'])) {
    $nombre = $_POST['formnombre'];
    $direccion = $_POST['formdireccion'];
    $telefono = $_POST['formtelefono'];

  $db = connect();
  $sentencia = $db->prepare("INSERT INTO usuario(nombre, direccion, telefono) VALUES(?,?,?)");
  $sentencia->execute(array($nombre, $direccion, $telefono));
 }
 header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));

}

function updateUsuario() {
  $db = connect();
  $id = 3;
  $sentencia = $db->prepare("UPDATE usuario SET nombre='lucio' WHERE id=$id");
  $sentencia->execute(array($id));


}

function deleteUsuario($id_usuario) {
  $db = connect();
  $sentencia = $db->prepare( "DELETE FROM usuario WHERE id=$id_usuario");
  $sentencia->execute(array($id_usuario));
  header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
}
 ?>
