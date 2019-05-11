<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio2</title>
  </head>
  <body>
    <h1>LEO TODO LO SIGUIENTE DE UN ARCHIVO Y LO AGREGO A LA BASE DE DATOS</h1>
    <h2>PANTCH RULES</h2>
  </body>
</html>
<?php

function connect() {
    return new PDO('mysql:host=localhost;'.'dbname=deudores;charset=utf8', 'root', '');
}

function add_deudor($nombre, $cuota, $cuota_capital, $vencimiento, $fecha_pago, $intereses, $pagado) {
  $db = connect();
  $sentencia = $db->prepare("INSERT INTO deudor(nombre, cuota, cuota_capital, vencimiento, fecha_pago, intereses, pagado) VALUES(?,?,?,?,?,?,?)");
  $sentencia->execute(array($nombre, $cuota, $cuota_capital, $vencimiento, $fecha_pago, $intereses, $pagado));
}

$array = file("archivo.txt");
array_shift($array);        //ELIMINA EL PRIMER ELEMENTO, YA QUE SE DEBE A LOS NOMBRES DE LA COLUMNA.

foreach ($array as $register) {
  $line = explode(';', $register);
  $cuota = $line[0];
  $fecha_pago = $line[1];
  $vencimiento = $line[2];
  $cuota_capital = $line[3];
  $intereses = $line[4];
  $pagado = $line[5];
  $nombre = $line[6];
  add_deudor($nombre, $cuota, $cuota_capital, $vencimiento, $fecha_pago, $intereses, $pagado);
}




 ?>
