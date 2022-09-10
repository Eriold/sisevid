<?php
$segments = isset($_SERVER['PHP_SELF']) ? $_SERVER['PHP_SELF'] : '';
// Print slashes
$res = preg_replace('/[a-z,.]/', '', $segments);
$testArray = explode("/", $res);
$load = './';
if (count($testArray) > 3) {
  $load = '';
  for ($i = 0; $i < count($testArray) - 3; $i++) {
    $load = '../' . $load;
  }
}
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="<?php echo $load ?>index.php">
    <img src="<?php echo $load ?>view/assets/icon.png" width="30" height="30" class="d-inline-block align-top" alt="">
    Sisevid
  </a>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo $load ?>view/evidence/create.php">Crear <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo $load ?>view/evidence/read.php">Leer</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo $load ?>view/evidence/update.php">Actualizar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo $load ?>view/evidence/delete.php">Borrar</a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li> -->
    </ul>
  </div>
</nav>