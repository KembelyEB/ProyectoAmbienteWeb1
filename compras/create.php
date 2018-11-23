<?php
require_once '../shared/guard.php';
$title = 'Crear Compra';
require_once '../shared/header.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require_once '../shared/db.php';
    $cliente = filter_input(INPUT_POST, 'id_clientes', FILTER_SANITIZE_STRING);
    $producto = filter_input(INPUT_POST, 'id_producto', FILTER_SANITIZE_STRING);
    $total= filter_input(INPUT_POST, 'total', FILTER_SANITIZE_STRING);
   
    $compra_model->insert($cliente,$producto,$total);
    return header('Location: /compras');
}
?>
<div class="container">
  <h1><?=$title?></h1>
  <form method="POST">
    <div class="form-group">
      <label for="id_clientes">Cliente</label>
      <input type="num" class="form-control" placeholder="Id_clientes" name="id_clientes">
    </div>
    <div class="form-group">
      <label for="id_producto">Producto</label>
      <input type="num" class="form-control" placeholder="Id_producto" name="id_producto">
    </div>
    <div class="form-group">
      <label for="total">Total</label>
      <input type="text" class="form-control" placeholder="Total" name="total">
    </div>
  
    <input class="btn btn-primary" type="submit" value="Aceptar">
    <a class="btn btn-default btn-danger" href="/compras">Cancelar</a>
  </form>
</div>
