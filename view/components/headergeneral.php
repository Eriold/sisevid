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

$home = $about = $login = '';

switch ($activeHeader) {
  case '_HOME':
    $home = 'active';
    $about = '';
    $login = '';
    break;
  case '_ABOUT':
    $home = '';
    $about = 'active';
    $login = '';
    break;
  case '_LOGIN':
    $home = '';
    $about = '';
    $login = 'active';
    break;
  default:
    $home = '';
    $about = '';
    $login = '';
}
?>

<nav class="navbar navbar-expand-sm navbar-dark bg-dark justify-content-between">
  <a class="navbar-brand" href="<?php echo $load ?>index.php">
    <img src="<?php echo $load ?>view/assets/icon.png" width="30" height="30" class="d-inline-block align-top" alt="">
    Sisevid
  </a>
  </button>
  <div class="form-inline" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item <?php echo $home ?>">
        <a class="nav-link" href="<?php echo $load ?>view/home.php">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item <?php echo $about ?>">
        <a class="nav-link" href="<?php echo $load ?>view/about.php">Acerca de nostoros</a>
      </li>
      <li class="nav-item <?php echo $login ?>">
        <a class="nav-link" href="<?php echo $load ?>view/login.php">Iniciar sesión</a>
      </li>
    </ul>
  </div>
</nav>