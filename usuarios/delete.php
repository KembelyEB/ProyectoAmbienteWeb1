<?php
require_once '../shared/guard.php';
$title = 'Eliminar Categoria';
require_once '../shared/header.php';
require_once '../shared/db.php';

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);
$categoria = $categoria_model->find($id);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $categoria_model->delete($id);
    return header('Location: /categorias');
}
?>
<div class="container">
  <h1><?=$title?></h1>
  <p>¿Está seguro de eliminar la categoria con el id <?=$id?></p>
  <form method="POST">
    <input class="btn btn-primary" type="submit" value="Aceptar">
    <a class="btn btn-default btn-danger" href="/categorias">Cancelar</a>
  </form>
</div>
