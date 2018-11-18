<?php
$title = 'Login';
require_once '../shared/header.php';
require_once '../shared/db.php';
require_once '../shared/sessions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    $user = $usuario_model->login($email, $password);
    if ($user != null) {
          $_SESSION['usuario_id'] = $user['id'];
          return header('Location: /home');
    } else {
          echo "<h3>Usuario o contraseña inválido!</h3>";
    }
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
        <input class="btn btn-primary" type="submit" value="Login!">
        <a class="btn btn-default" href="/seguridad/signup.php">Signup</a>
      </form>
    </div>
  </div>
</div>
