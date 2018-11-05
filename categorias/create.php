<?php
require_once '../shared/guard.php';
$title = 'Crear Categoria';
require_once '../shared/header.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require_once '../shared/db.php';
    $nombre = filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_STRING);
    $categoriaP = filter_input(INPUT_POST, 'categoriaP', FILTER_SANITIZE_STRING);
    $categoria_model->insert($nombre, $categoriaP);
    return header('Location: /categorias');
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
      <label for="categoriaP">Categoria Padre</label>
      <input type="text" class="form-control" placeholder="CategoriaP" name="categoriaP">
    </div>
    <input class="btn btn-primary" type="submit" value="Aceptar">
    <a class="btn btn-default btn-danger" href="/categorias">Cancelar</a>
  </form>
</div>
