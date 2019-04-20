<?php
if(isset($_POST['palabra1']) && isset($_POST['palabra2'])) {
  $p1 = $_POST['palabra1'];
  $p2 = $_POST['palabra2'];
  echo $p1 . ' ' .$p2;
}
 ?>
