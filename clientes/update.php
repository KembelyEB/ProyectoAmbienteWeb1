<?php
require_once '../shared/guard.php';
$title = 'Editar Cliente';
require_once '../shared/header.php';
require_once '../shared/db.php';

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);
$clientes = $cliente_model->find($id);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_STRING);
    $apellido = filter_input(INPUT_POST, 'apellido', FILTER_SANITIZE_STRING);
    $telefono = filter_input(INPUT_POST, 'telefono', FILTER_SANITIZE_STRING);
    $correo = filter_input(INPUT_POST, 'correo', FILTER_SANITIZE_STRING);
    $direccion = filter_input(INPUT_POST, 'direccion', FILTER_SANITIZE_STRING);
    $cliente_model->insert($nombre, $apellido, $telefono, $correo, $direccion);
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
      <label for="apellido">Apellido</label>
      <input type="text" class="form-control" placeholder="Apellido" name="apellido">
    </div>
    <div class="form-group">
      <label for="telefono">Telefono</label>
      <input type="text" class="form-control" placeholder="Telefono" name="telefono">
    </div>
     <div class="form-group">
      <label for="correo">Correo</label>
      <input type="text" class="form-control" placeholder="Correo" name="correo">
    </div>
    <div class="form-group">
      <label for="dirección">Dirección</label>
      <input type="text" class="form-control" placeholder="Dirección" name="direccion">
    </div>
     
    <input class="btn btn-primary" type="submit" value="Aceptar">
    <a class="btn btn-default btn-danger" href="/clientes">Cancelar</a>
  </form>
</div>
