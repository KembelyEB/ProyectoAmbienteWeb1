<?php
require_once '../shared/guard.php';
$title = 'Crear Cliente';
require_once '../shared/header.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $nombre, $apellido,$correo,$direccion,$telefono
    require_once '../shared/db.php';
    $nombre = filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_STRING);
    $apellido = filter_input(INPUT_POST, 'apellido', FILTER_SANITIZE_STRING);
    $correo = filter_input(INPUT_POST, 'correo', FILTER_SANITIZE_STRING);
    $direccion = filter_input(INPUT_POST, 'direccion', FILTER_SANITIZE_STRING);
    $telefono = filter_input(INPUT_POST, 'telefono', FILTER_SANITIZE_STRING);
    $cliente_model->insert( $nombre, $apellido,$correo,$direccion,$telefono);
    return header('Location: /clientes');
}
?>
<div class="container">
  <h1><?=$title?></h1>
  <form method="POST">
    <div class="form-group">
      <label for="nombre">Nombre</label>
      <input type="text" class="form-control" placeholder="Nombre" name="nombre">
    </div>
    <div class="form-group">
      <label for="categoriaP">Apellido</label>
      <input type="text" class="form-control" placeholder="Apellido" name="apellido">
    </div>
     <div class="form-group">
      <label for="correo">Correo</label>
      <input type="text" class="form-control" placeholder="Correo" name="correo">
    </div>
    <div class="form-group">
      <label for="dirección">Dirección</label>
      <input type="text" class="form-control" placeholder="Dirección" name="dirección">
    </div>
     <div class="form-group">
      <label for="telefono">Telefono</label>
      <input type="text" class="form-control" placeholder="Telefono" name="Telefono>
    </div>
    <input class="btn btn-primary" type="submit" value="Aceptar">
    <a class="btn btn-default btn-danger" href="/categorias">Cancelar</a>
  </form>
</div>
