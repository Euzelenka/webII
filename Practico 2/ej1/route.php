<?php

include_once 'index.php';


function parseURL($url){

  $urlExplode = explode('/', $url);  //Crea un arreglo
  $arrayReturn[ConfigApp::$ACTION] = $urlExplode[ACTION];
  $arrayReturn[ConfigApp::$PARAMS] = isset($urlExplode[VALOR1]) ? array_slice($urlExplode,1) : null;

  return $arrayReturn;
}

if(isset($_GET['action'])){
  if($_GET['action'] == '') {
    home();
  }



}
 ?>
