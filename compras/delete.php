<?php
require_once '../shared/guard.php';
$title = 'Eliminar Compras';
require_once '../shared/header.php';
require_once '../shared/db.php';

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);
$compras = $compra_model->find($id);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $compra_model->delete($id);
    return header('Location: /Compras');
}
?>
<div class="container">
  <h1><?=$title?></h1>
  <p>¿Está seguro de eliminar la compra con el id <?=$id?></p>
  <form method="POST">
    <input class="btn btn-primary" type="submit" value="Aceptar">
    <a class="btn btn-default btn-danger" href="/compras">Cancelar</a>
  </form>
</div>
