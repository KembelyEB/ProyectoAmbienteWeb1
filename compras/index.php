<?php
  require_once '../shared/guard.php';
  $title = 'Compras';
  require_once '../shared/header.php';
  require_once '../shared/db.php';
  $compras = $compra_model->select();
?>
<div class="container">
  <h1><?=$title?></h1>

  <table class="table table-striped table-bordered">
    <tr>
      <th>Id</th>
      <th>Cliente</th>
      <th>Producto</th>
       <th>Total</th>
      
      
   
    </tr>
<?php
foreach ($compras as $compra) {
    echo '<tr>';
    echo '<td>' . $compra['id'] . '</td>';
    echo '<td>' . $compra['id_cliente'] . '</td>';
    echo '<td>' . $compra['id_producto'] . '</td>';
    echo '<td>' . $compra['total'] . '</td>';
    echo '<td>';

    echo '<a href="/compras/delete.php?id=' . $compra['id'] . '" class="btn btn-danger">Eliminar</a>';
    echo '</td>';
    echo '</tr>';
}
?>
  </table>
</div>
