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
      <th>Nombre</th>
      <th>Descripción</th>
       <th>Categoria</th>
       <th>Stock</th>
       <th>Sku<th>

      
      <th class="text-center"><a href="/compras/create.php" class="btn btn-success">+</a></th>
    </tr>
<?php
foreach ($compras as $compra) {
    echo '<tr>';
    echo '<td>' . $compra['id'] . '</td>';
    echo '<td>' . $compra['Nombre'] . '</td>';
    echo '<td>' . $compra['Descripción'] . '</td>';
    echo '<td>' . $compra['Categoria'] . '</td>';
    echo '<td>' . $compra['Stock'] . '</td>';
    echo '<td>' . $compra['Sku'] . '</td>';
    echo '<td>';
    echo '<a href="/categorias/update.php?id=' . $compra['id'] . '" class="btn btn-warning mr-2">Editar</a>';
    echo '<a href="/categorias/delete.php?id=' . $compra['id'] . '" class="btn btn-danger">Eliminar</a>';
    echo '</td>';
    echo '</tr>';
}
?>
  </table>
</div>
