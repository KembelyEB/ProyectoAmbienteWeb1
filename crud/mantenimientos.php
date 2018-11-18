<?php
  require_once '../shared/guard.php';
  $title = 'Mantenimientos';
  require_once '../shared/header.php';
  require_once '../shared/db.php';
 

 $menu = [
          'Clientes' => '/clientes/index.php',
          'Categorias ' => '/categorias/index.php',
          'Productos' => '/productos/index.php',
          'Compras' => '/compras/index.php',
          'Usuarios' => '/usuarios/index.php',
        ];