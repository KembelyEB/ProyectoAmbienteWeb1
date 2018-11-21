<?php
  require_once '../shared/guard.php';
  $title = 'Producto';
  require_once '../shared/header.php';
  require_once '../shared/db.php';
  $productos = $producto_model->select();
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

      
      <th class="text-center"><a href="/productos/create.php" class="btn btn-success">+</a></th>
    </tr>
<?php
/*
foreach ($productos as $producto) {
    echo '<tr>';
    echo '<td>' . $producto['id'] . '</td>';
    echo '<td>' . $producto['Nombre'] . '</td>';
    echo '<td>' . $producto['Descripción'] . '</td>';
    echo '<td>' . $producto['Categoria'] . '</td>';
    echo '<td>' . $producto['Stock'] . '</td>';
    echo '<td>' . $producto['Sku'] . '</td>';
    echo '<td>';
    echo '<a href="/productos/update.php?id=' . $producto['id'] . '" class="btn btn-warning mr-2">Editar</a>';
    echo '<a href="/productos/delete.php?id=' . $producto['id'] . '" class="btn btn-danger">Eliminar</a>';
    echo '</td>';
    echo '</tr>';
}
?>
  </table>
</div>
