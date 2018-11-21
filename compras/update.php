<?php
require_once '../shared/guard.php';
$title = 'Editar Compras';
require_once '../shared/header.php';
require_once '../shared/db.php';

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);
$compras = $compra_model->find($id);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     $cliente = filter_input(INPUT_POST, 'id_cliente', FILTER_SANITIZE_STRING);
    $producto = filter_input(INPUT_POST, 'id_producto', FILTER_SANITIZE_STRING);
    $total= filter_input(INPUT_POST, 'total', FILTER_SANITIZE_STRING);
    $compra_model->update($cliente,$producto,$total);
    return header('Location: /Compras');
}
?>
<div class="container">
  <h1><?=$title?></h1>
  <form method="POST">
    <div class="form-group">
      <label for="cliente">Cliente</label>
      <input type="text" class="form-control" placeholder="Cliente" name="cliente" value="<?=$compra['id_cliente']?>">
    </div>
    <div class="form-group">
      <label for="producto">Producto</label>
      <input type="text" class="form-control" placeholder="Producto" name="producto" value="<?=$compra['id_producto']?>">
    </div>
    <div class="form-group">
      <label for="total">Total</label>
      <input type="text" class="form-control" placeholder="Total" name="total" value="<?=$compra['total']?>">
    </div>
  
    <input class="btn btn-primary" type="submit" value="Aceptar">
    <a class="btn btn-default btn-danger" href="/compras">Cancelar</a>
  </form>
</div>
