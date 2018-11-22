<?php
  require_once '../shared/guard.php';
  $title = 'Cliente';
  require_once '../shared/header.php';
  require_once '../shared/db.php';
  $clientes = $cliente_model->select();
?>
<div class="container">
  <h1><?=$title?></h1>

  <table class="table table-striped table-bordered">
    <tr>
      <th>Id</th>
      <th>Nombre</th>
       <th>Apellido</th>
        <th>Telefono</th>
       <th>Correo</th>
        <th>Dirección</th>
      

      <th class="text-center"><a href="/clientes/create.php" class="btn btn-success">+</a></th>
    </tr>
<?php
foreach ($clientes as $Cliente) {
    echo '<tr>';
    echo '<td>' . $Cliente['id'] . '</td>';
    echo '<td>' . $Cliente['nombre'] . '</td>';
    echo '<td>' . $Cliente['apellido'] . '</td>';
    echo '<td>' . $Cliente['telefono'] . '</td>';
    echo '<td>' . $Cliente['correo'] . '</td>';
     echo '<td>' . $Cliente['direccion'] . '</td>';

    echo '<td>';
    echo '<a href="/clientes/update.php?id=' . $Cliente['id'] . '" class="btn btn-warning mr-2">Editar</a>';
    echo '<a href="/clientes/delete.php?id=' . $Cliente['id'] . '" class="btn btn-danger">Eliminar</a>';
    echo '</td>';
    echo '</tr>';
}
?>
  </table>
</div>
