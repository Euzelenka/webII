<?php
 $largo = $_REQUEST['number'];
 $table = '<table border = "1">';

  for ($fila=1; $fila <= $largo; $fila++) {
    $table.= '<tr>';          //<TR> TAG DE FILA
    for ($col=1; $col <= $largo; $col++) {
       $table.= '<td>'. $fila * $col. '</ td>';
    }
    $table.= '</tr>';
  }
  echo $table;
 ?>
