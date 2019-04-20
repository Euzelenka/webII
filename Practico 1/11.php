<?php
 $a = $_REQUEST['a'];
 $b = $_REQUEST['b'];
 $c = $_REQUEST['c'];

 $num1 = $b * $b;
 $num2 = 4 * $a * $c;

 if ($num1 < $num2) {    //CONSULTO QUE TIPO DE RAIZ ES
   $raiz = "RAÍCES COMPLEJAS CONJUGADAS";
   $tipo = 1;    //AGREGO LA VARIABLE TIPO, PARA SABER QUE TIPO DE RAIZ ES Y HACER LA ECUACION CORRECTA
 }
 elseif ($num1 == $num2) {
   $raiz = "RAÍCES REALES IGUALES";
   $tipo = 2;
 }
 elseif ($num1 > $num2) {
   $raiz = "RAÍCES REALES DISTINTAS";
   $tipo = 3;
 }

 switch ($tipo) {
    case 1:
        $term1 = ($b * $b) / (2 * $a);
        $term2 = (4 * $a * $c) - ($b * $b);
        $term = sqrt($term2);
        $term2 = $term / (2 * $a);
        $result1 = $term1."+".$term2."i";
        $result2 = $term1."-".$term2."i";
        break;
    case 2:
        $result1 = ($b * $b) / (2 * $a);
        $result2 = $result1;
        break;
    case 3:
        $term1 = ($b * $b) / (2 * $a);
        $term2 = ($b * $b) - (4 * $a * $c);
        $term = sqrt($term2);
        $term2 = $term / (2 * $a);
        $result1 = $term1 - $term2;
        $result2 = $term1 + $term2;
        break;
}

  $table = '<table border = "2">';
  $table.= '<tr>';          //<TR> TAG DE FILA
  $table.= '<td>'. "TIPO". '</ td>';
  $table.= '<td>'. "A". '</ td>';
  $table.= '<td>'. "B". '</ td>';
  $table.= '<td>'. "C". '</ td>';
  $table.= '<td>'. "VALORES". '</ td>';
  $table.= '</tr>';

  $table.= '<tr>';
  $table.= '<td>'. $raiz . '</ td>';
  $table.= '<td>'. $a . '</ td>';
  $table.= '<td>'. $b . '</ td>';
  $table.= '<td>'. $c . '</ td>';
  $table.= '<td>'. 'x0:'. $result1 . 'x1:' . $result2 . '</ td>';
  $table.= '</tr>';
  echo "$table";
 ?>
