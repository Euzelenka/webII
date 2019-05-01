<?php

include_once 'index.php';
include_once 'usuario.php';

$parseURL = explode('/', $_GET['action']);

if(isset($parseURL[0])){
  if($_GET['action'] == '') {
    home();
  }
  elseif($parseURL[0] == 'agregar') {
      addUsuario();
    }
  else {
    if ($parseURL[0] == 'eliminar') {
      deleteUsuario($parseURL[1]);
    }
  }
}
 ?>
