<?php
  require_once __DIR__ . '/sessions.php';
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Principal</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto ">
        <?php
        if(isset($_SESSION['admin']) && $_SESSION['admin']){
       // echo "<h1>Soy administrador</h1>";
        $menu = [
          'Home' => '/',
          'Categoria ' => '/categoria.php',
          'Jobs' => '/jobs.php',
          'Mantenimiento' => '/crud/mantenimientos.php',
          'Producto' => '/crud/productos.php',

        ];
          }
        else{
          $menu = [
          'Home' => '/',
          'Contact ' => '/contact_us.php',
          'Jobs' => '/jobs.php',
        ];

  
        }

        
        if (isset($_SESSION['usuario_id']) || !empty($_SESSION['usuario_id'])) {
            foreach ($menu as $key => $value) {
                echo "<li class='nav-item'>
                      <a class='nav-link' href='$value'>$key</a>
                    </li>";
            }
        }
        ?>
    </ul>
    <?php
      if (isset($_SESSION['usuario_id']) || !empty($_SESSION['usuario_id'])) {
    ?>
    <ul class="nav navbar-nav navbar-right">
      <li><a href='/seguridad/logout.php'>Cerrar Session</a></li>
    </ul>
    <?php
    }
    ?>
  </div>
</nav>


