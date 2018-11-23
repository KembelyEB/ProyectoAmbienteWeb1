<?php
$title = 'Iniciar Sesión';
require_once '../shared/header.php';
require_once '../shared/db.php';
require_once '../shared/sessions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    $user = $usuario_model->login($email, $password);

    if ($email === "vi@gmail.com" && $password === "123") {
          $_SESSION['usuario_id'] = $user['id'];
          $_SESSION['admin'] = $user['administrador'];
          return header('Location: /home');
    }elseif($user != null || $user != 0) {
          $_SESSION['usuario_id'] = $user['id'];
          $_SESSION['cliente'] = $user['email'];
          return header('Location: /home');   

    }else{
        echo "<h3>Usuario o contraseña inválido!</h3>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <div  class="container" style="width: 100%; text-align:center;">
    <h1><?=$title?></h1>
    <div class="row" >
      <div class="center" style="margin:auto;" class="col-md-12">
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
          <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email">
          </div>
          <div class="form-group">
            <label for="password">Contraseña</label>
            <input type="password" class="form-control" id="password" placeholder="Password" name="password">
          </div>
          <input class="btn btn-sucess" type="submit" value="Login">
          <a class="btn btn-info" href="/seguridad/signup.php">Registrar</a>
        </form>
      </div>
    </div>
  </div>
</body>
</html>


