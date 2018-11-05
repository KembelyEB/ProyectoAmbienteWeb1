<?php

require_once __DIR__ . '/../Db/PgConnection.php';
require_once __DIR__ . '/../Models/Usuario.php';
require_once __DIR__ . '/../Models/Categoria.php';

use Db\PgConnection;

$con = new PgConnection('postgres', 'lanegra15', 'proyectoUno', 5432, 'localhost');
$con->connect();

$usuario_model = new Models\Usuario($con);
$categoria_model = new Models\Categoria($con);
