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
      <th>Sku<th>
      <th>Nombre</th>
      <th>Descripción</th>
      <th>Imagen</th>
       <th>Categoria</th>
       <th>Stock</th>
       <th>Precio</th>
      

      
      <th class="text-center"><a href="/productos/create.php" class="btn btn-success">+</a></th>
    </tr>
<?php

foreach ($productos as $producto) {
    echo '<tr>';
    echo '<td>' . $producto['id'] . '</td>';
    echo '<td>' . $producto['sku'] . '</td>';
    echo '<td>' . $producto['nombre'] . '</td>';
    echo '<td>' . $producto['descripción'] . '</td>';
    echo '<td>' . $producto['imagen'] . '</td>';
    echo '<td>' . $producto['id_categoria'] . '</td>';
    echo '<td>' . $producto['stock'] . '</td>';
    echo '<td>' . $producto['precio'] . '</td>';
  
    echo '<td>';
    echo '<a href="/productos/update.php?id=' . $producto['id'] . '" class="btn btn-warning mr-2">Editar</a>';
    echo '<a href="/productos/delete.php?id=' . $producto['id'] . '" class="btn btn-danger">Eliminar</a>';
    echo '</td>';
    echo '</tr>';
}
?>
  </table>
</div>
