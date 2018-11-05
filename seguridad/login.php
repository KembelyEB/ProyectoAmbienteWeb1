<?php
$title = 'Login';
require_once '../shared/header.php';
require_once '../shared/db.php';
require_once '../shared/sessions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    $user = $usuario_model->login($usuario, $password);
    if ($user != null) {
          $_SESSION['usuario_id'] = $user['id'];
          return header('Location: /home');
    } else {
          echo "<h3>Usuario o contraseña inválido!</h3>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Raleway:400,300' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/estilos.css">
  <title>Iniciar Sesión</title>
</head>
<body>
<div class="container">
  <h1><?=$title?></h1>
  <div class="row">
    <div class="col-md-12">
      <form method="POST">
        <div class="form-group">
          <label for="email">Usuario</label>
          <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email">
        </div>
        <div class="form-group">
          <label for="password">Coontraseña</label>
          <input type="password" class="form-control" id="password" placeholder="Password" name="password">
        </div>
        <input class="btn btn-primary" type="submit" value="Login!">
        <a class="btn btn-default" href="/seguridad/signup.php">Signup</a>
      </form>
    </div>
  </div>
</div>
</body>

</html>
