<?php
$title = 'Registro';
require_once '../shared/header.php';
require_once '../shared/db.php';

$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
$password_verification = filter_input(INPUT_POST, 'password_verification', FILTER_SANITIZE_STRING);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if ($password == $password_verification) {
        $usuario_model->insert($email, $password);
        return header('Location: /seguridad/login.php');
    }
    echo "<h3>Contraseñas no coinciden</h3>";
}
?>
<div class="container">
  <h1><?=$title?></h1>
  <div class="row">
    <div class="col-md-12">
      <form method="POST">
        <div class="form-group">
          <label for="email">Email address</label>
          <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email">
        </div>
        <div class="form-group">
          <label for="password">Contraseña</label>
          <input type="password" class="form-control" id="password" placeholder="Password" name="password">
        </div>
        <div class="form-group">
          <label for="password_verification">Verificar</label>
          <input type="password" class="form-control" id="password_verification" placeholder="Password" name="password_verification">
        </div>
        <input class="btn btn-primary" type="submit" value="Login!">
        <a class="btn btn-default" href="/seguridad/signup.php">Signup</a>
      </form>
    </div>
  </div>
</div>
