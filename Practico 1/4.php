<?php
  if(isset($_POST['peso']) && isset($_POST['altura'])) {
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];
    $imc = $peso / ($altura * $altura);
    if($imc < 18.50) {
      echo "Usted tiene bajo peso";
    }
    elseif ((18.50 < $imc) && ($imc < 24.99)) {
      echo "Usted tiene peso normal";
    }
    elseif ($imc >= 25) {
      echo "Usted tiene sobrepeso";
    }
    elseif ($imc >=30) {
      echo "Usted tiene obesidad";
    }
  }
 ?>
