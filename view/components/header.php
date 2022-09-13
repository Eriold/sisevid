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
global $activeHeader;

$home = $create = $read = $delete = $update = '';

switch ($activeHeader) {
  case '_HOME':
    $home = '';
    $create = '';
    $read = '';
    $delete = '';
    $update = '';
    break;
  case '_CREATE':
    $home = '';
    $create = 'active';
    $read = '';
    $delete = '';
    $update = '';
    break;
    break;
  case '_READ':
    $home = '';
    $create = '';
    $read = 'active';
    $delete = '';
    $update = '';
    break;
  case '_DELETE':
    $home = '';
    $create = '';
    $read = '';
    $delete = 'active';
    $update = '';
    break;
  case '_UPDATE':
    $home = '';
    $create = '';
    $read = '';
    $delete = '';
    $update = 'active';
    break;
  default:
    $home = '';
    $create = '';
    $read = '';
    $delete = '';
    $update = '';
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
      <li class="nav-item <?php echo $create ?>">
        <a class="nav-link" href="<?php echo $load ?>view/school/create.php">Crear <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item <?php echo $read ?>">
        <a class="nav-link" href="<?php echo $load ?>view/school/read.php">Leer</a>
      </li>
      <li class="nav-item <?php echo $update ?>">
        <a class="nav-link" href="<?php echo $load ?>view/school/update.php">Actualizar</a>
      </li>
      <li class="nav-item <?php echo $delete ?>">
        <a class="nav-link" href="<?php echo $load ?>view/school/delete.php">Borrar</a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li> -->
    </ul>
  </div>
</nav>