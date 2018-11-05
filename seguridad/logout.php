<?php
require_once __DIR__ . '/../shared/sessions.php';
session_destroy();
return header('Location: /seguridad/login.php');
