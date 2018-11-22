<?php

require_once __DIR__ . '/../Db/PgConnection.php';
require_once __DIR__ . '/../Models/Usuario.php';
require_once __DIR__ . '/../Models/Categoria.php';
require_once __DIR__ . '/../Models/Cliente.php';
require_once __DIR__ . '/../Models/Compra.php';
require_once __DIR__ . '/../Models/Producto.php';

use Db\PgConnection;

$con = new PgConnection('postgres', '1234', 'proyectoUno', 5432, 'localhost');
$con->connect();

$usuario_model = new Models\Usuario($con);
$categoria_model = new Models\Categoria($con);
$cliente_model = new Models\Cliente($con);
$compra_model = new Models\Compra($con);
$producto_model = new Models\Producto($con);
