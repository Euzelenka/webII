<?php
require_once "usuario.php";

function home() {
  $Titulo = "Lista de Usuarios";

 ?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <meta charset="utf-8">
    <title><?php echo $Titulo; ?></title>
  </head>
  <body>
    <h1><?php echo $Titulo; ?></h1>
    <div class="container">
      <ul class="list-group">
        <?php
            foreach (getUsuarios() as $usuario) {
              echo '<li class="list-group-item">'.$usuario['nombre'].', '.$usuario['direccion'].', '.$usuario['telefono'].'</li>';
            }
         ?>
      </ul>
    </div>

    <div class="container">
      <h2>Formulario</h2>
      <form method="post" action="agregar">
          <div class="form-group">
            <label for="exampleInputnombre">Nombre</label>
            <input type="text" class="form-control" id="formnombre" name="formnombre">
          </div>
          <div class="form-group">
            <label for="exampleInputdireccion">Direccion</label>
            <input type="text" class="form-control" id="formdireccion" name="formdireccion">
          </div>
          <div class="form-group">
            <label for="exampleInputtelefono">Telefono</label>
            <input type="number" class="form-control" id="formtelefono" name="formtelefono">
          </div>
          <button type="submit" class="btn btn-primary">Crear Usuario</button>
      </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>
</html>

<?php
}

 ?>
