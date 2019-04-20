<?php
function home(){

return '<!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <title>Calculadora</title>
    </head>
    <body>
      <a href="#">Home</a>
      <a href="about">About</a>
      <a href="about/juan">About - Juan</a>
      <a href="pi">Número Pi</a>
  <h1>Ingrese los número para sumar:</h1>
      <form class="" action="sumar.php" method="get">
        <label for="a">Primer número</label>
        <input type="number" id="a" name="a" value="">
        <label for="b">Segundo número</label>
        <input type="number" id="b" name="b" value="">
        <button type="submit" name="button">Sumar</button>
      </form>
    </body>
  </html>';


}
 ?>
