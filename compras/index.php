<?php
  require_once '../shared/guard.php';
  $title = 'Compra';
  require_once '../shared/header.php';
  require_once '../shared/db.php';
?>
<div class="container">
  <h1><?=$title?></h1>

  <table class="table table-striped table-bordered">
    <tr>
      <th>Id</th>
      <th>Cliente</th>
      <th>Producto</th>
       <th>Total</th>

        <th class="text-center"><a href="/compras/create.php" class="btn btn-success">+</a></th>
    </tr>
<?php
  $compras = $compra_model->selectcliente($_SESSION["usuario_id"]);
  if(!empty($compras)){
    foreach($compras as $Compra) {
        echo '<tr>';
        echo '<td>' . $Compra['id'] . '</td>';
        echo '<td>' . $Compra['id_clientes'] . '</td>';
        echo '<td>' . $Compra['id_producto'] . '</td>';
        echo '<td>' . $Compra['total'] . '</td>';
        echo '<td>';
        echo '</td>';
        echo '</tr>';
    }
  }
    
?>
  </table>
</div>
