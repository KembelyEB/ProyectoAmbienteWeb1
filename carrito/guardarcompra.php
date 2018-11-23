<?php  session_start();
/* Este archio muestra los productos en una tabla.
*/
    require_once '../shared/db.php';

	$idproducto = $_GET["id"];
	$idcliente = $_SESSION["usuario_id"];

    $productos = $producto_model->find($idproducto);

	$compra_model->insert($productos["id"], $idcliente, $productos["id"], $productos["precio"]);

	header("Location: /home");
?>
