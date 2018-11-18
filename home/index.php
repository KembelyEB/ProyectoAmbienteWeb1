<?php
$title = 'Home';
require_once '../shared/header.php';
require_once '../shared/sessions.php';

if (!isset($_SESSION['usuario_id']) || empty($_SESSION['usuario_id'])) {
    return header('Location: /seguridad/login.php');
}

echo "<h1>$title</h1>";

require_once '../shared/footer.php';
