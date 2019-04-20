<?php

function sumar($sumandos) {
  $resultado = array_sum($sumandos);
  return "La suma de los sumandos ".implode("+", $sumandos)." es $resultado";
}

function restar($restandos)
{
  $resultado = array_sum($restandos);
  return "La resta de los restandos ".implode("-", $restandos)." es $resultado";
}

 ?>
