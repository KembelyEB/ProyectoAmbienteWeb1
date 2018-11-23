<?php

    require_once '../shared/db.php';
    //this is gonna bring the information from the database

    $cantidad = $argv[1];
    $productos = $producto_model->select($cantidad);    

    $to = "argenalmik130297@gmail.com";
    $subject = "Productos con bajo stock";

    $txt = "ID Producto | Nombre | Stock \r\n";

    //this is establishing the products on the variable
    foreach($productos as $producto){
        $txt .= $producto["sku"] . "         " .  $producto["nombre"] . "       " .  $producto["stock"] . "\r\n";
    }
    
    $headers = "From: correopruebaxampp@gmail.com";

    //this is gonna send the email throug xampp
    mail($to,$subject,$txt,$headers);
