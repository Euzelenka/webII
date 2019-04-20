<?php
define('ACTION', 0);
define('VALOR1', 1);
define('VALOR2', 2);

include_once 'config/ConfigApp.php';
include_once 'index.php';
include_once 'sumar.php';
include_once 'about.php';
include_once 'pi.php';

function parseURL($url){

  $urlExplode = explode('/', $url);  //Crea un arreglo
  $arrayReturn[ConfigApp::$ACTION] = $urlExplode[ACTION];
  $arrayReturn[ConfigApp::$PARAMS] = isset($urlExplode[VALOR1]) ? array_slice($urlExplode,1) : null;

  return $arrayReturn;
}

if(isset($_GET['action'])){
  $urlData = parseURL($_GET['action']);
  $action = $urlData[ConfigApp::$ACTION];
  if(array_key_exists($action, ConfigApp::$ACTIONS)){
    $params = $urlData[ConfigApp::$PARAMS];
    $metodo = ConfigApp::$ACTIONS[$action];
    if(isset($params) && $params != null){
      echo $metodo($params);
    }
    else{
      echo $metodo();
    }
  }
  //
  // if($actions[ACTION] === 'sumar'){
  //   echo sumar($actions[VALOR1], $actions[VALOR2]);
  // }
  //
  // if ($actions[ACTION] === 'about') {
  //   if(isset($actions[VALOR1])){
  //       echo about($actions[VALOR1]);
  //   }
  //   else echo about();
  // }
  //
  // else{
  //   if($actions[ACTION] === 'pi'){
  //     echo piNumber();
  //   }
  // }
}
 ?>
