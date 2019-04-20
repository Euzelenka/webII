<?php
if(isset($_GET['v1']) && isset($_GET['v2']) && isset($_GET['v3'])) {
  $n1 = $_GET['v1'];
  $n2 = $_GET['v2'];
  $n3 = $_GET['v3'];

  $result = $n1 * $n2;
  $result = $result - $n3;
  echo "$n1 * $n2 - $n3 = $result";
}
 ?>
