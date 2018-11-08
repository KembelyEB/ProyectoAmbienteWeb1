<?php
require_once '../shared/guard.php';
$title = 'Crear Compras';
require_once '../shared/header.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require_once '../shared/db.php';
    $nombre = filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_STRING);
    $descripcion = filter_input(INPUT_POST, 'descripcion', FILTER_SANITIZE_STRING);
    $categoria= filter_input(INPUT_POST, 'categoria', FILTER_SANITIZE_STRING);
    $stock= filter_input(INPUT_POST, 'stock', FILTER_SANITIZE_STRING);
    $sku = filter_input(INPUT_POST, 'sku', FILTER_SANITIZE_STRING);
    $categoria_model->insert($nombre, $descripcion,$categoria,$stock,$sku);
    return header('Location: /Compras');
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
      <label for="nombre">Descripcion</label>
      <input type="text" class="form-control" placeholder="Descripcion" name="descripcion">
    </div>
    <div class="form-group">
      <label for="categoria">Categoria</label>
      <input type="text" class="form-control" placeholder="Categoria" name="Categoria">
    </div>
    <div class="form-group">
      <label for="stock">Stock</label>
      <input type="text" class="form-control" placeholder="Stock" name="stock">
    </div>
    <div class="form-group">
      <label for="sku">Sku</label>
      <input type="text" class="form-control" placeholder="Sku" name="sku">
    </div>
    <input class="btn btn-primary" type="submit" value="Aceptar">
    <a class="btn btn-default btn-danger" href="/categorias">Cancelar</a>
  </form>
</div>
