<?php
if(isset($_GET['numb'])){
  $numeros = $_GET['numb'];
  $array = explode(",",$numeros);
  rsort($array);
  // var_export($array);
  $cant = count($array);
  // print_r($array);
  for ($i=0; $i < $cant; $i++) {
    print_r($array[$i]."\r".'-') ;
  }
}
 ?>
