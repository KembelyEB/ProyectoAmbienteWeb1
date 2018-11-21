<?php
  require_once '../shared/guard.php';
  $title = 'Categorias';
  require_once '../shared/header.php';
  require_once '../shared/db.php';
  $categorias = $categoria_model->select();
?>
<div class="container">
  <h1><?=$title?></h1>

  <table class="table table-striped table-bordered">
    <tr>
      <th>Id</th>
      <th>Nombre</th>
      <th>Categoria Padre</th>
      <th class="text-center"><a href="/categorias/create.php" class="btn btn-success">+</a></th>
    </tr>
<?php
/*foreach ($categorias as $categoria) {
    echo '<tr>';
    echo '<td>' . $categoria['id'] . '</td>';
    echo '<td>' . $categoria['nombre'] . '</td>';
    echo '<td>' . $categoria['categoriaP'] . '</td>';
    echo '<td>';
    echo '<a href="/categorias/update.php?id=' . $categoria['id'] . '" class="btn btn-warning mr-2">Editar</a>';
    echo '<a href="/categorias/delete.php?id=' . $categoria['id'] . '" class="btn btn-danger">Eliminar</a>';
    echo '</td>';
    echo '</tr>';
}
?>*/
  </table>
</div>
