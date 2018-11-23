<?php
$title = 'Home';
require_once '../shared/header.php';
require_once '../shared/sessions.php';
require_once '../shared/db.php';

if (!isset($_SESSION['usuario_id']) || empty($_SESSION['usuario_id'])) {
    return header('Location: /seguridad/login.php');
}

$productos = $producto_model->select();	
require_once '../shared/footer.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<div class="container" style="text-align:center; ">
		<h1>Productos</h1>
		<div class="row">
		<?php foreach($productos as $producto):?>

			<div class="card col-sm-3" style="width: 18rem; margin: 7px;">
			  <div class="card-body">
			    <h5 class="card-title">	Nomnbre: <?php echo $producto["nombre"];?></h5>
			    <h6 class="card-subtitle mb-2 text-muted">Precio: <?php echo $producto["precio"];?></h6>
			    <p class="card-text"><?php echo $producto["descripcion"];?></p>
			    <a href="/carrito/guardarcompra.php?id=<?php echo $producto['id'];?>" class="btn btn-success">Comprar</a>
			  </div>
			</div>

		<?php endforeach;?>
		</div>
	</div>

</body>
</html>