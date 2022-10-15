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

$home = $evidence = $menu = $programs = $school = $users = '';

switch ($activeHeader) {
  case '_HOME':
    $home = 'active_home';
    $evidence = '';
    $menu = '';
    $programs = '';
    $school = '';
    $users = '';
    break;
  case '_EVIDENCE':
    $home = '';
    $evidence = 'active_evidence';
    $menu = '';
    $programs = '';
    $school = '';
    $users = '';
    break;
  case '_MENU':
    $home = '';
    $evidence = '';
    $menu = 'active_menu';
    $programs = '';
    $school = '';
    $users = '';
    break;
  case '_PROGRAMS':
    $home = '';
    $evidence = '';
    $menu = '';
    $programs = 'active_programs';
    $school = '';
    $users = '';
    break;
  case '_SCHOOL':
    $home = '';
    $evidence = '';
    $menu = '';
    $programs = '';
    $school = 'active_school';
    $users = '';
    break;
  case '_USERS':
    $home = '';
    $evidence = '';
    $menu = '';
    $programs = '';
    $school = '';
    $users = 'active_users';
    break;
  default:
    $home = '';
    $evidence = '';
    $menu = '';
    $programs = '';
    $school = '';
    $users = '';
}
session_start();
if (!isset($_SESSION['id_user']) && !isset($_SESSION['name_user'])) {
  header('Location:' . $load . 'index.php');
  exit;
}
?>

<nav class="navbar navbar-inverse fixed-top" id="sidebar-wrapper" role="navigation">
  <ul class="nav sidebar-nav">
    <div class="sidebar-header">
      <div class="sidebar-brand">
        <a class="navbar-brand" href="<?php echo $load ?>view/index.php">
          <img src="<?php echo $load ?>view/assets/icon.png" width="30" height="30" class="d-inline-block align-top" alt="">
          Sisevid
        </a>
      </div>
    </div>
    <li><a class="<?php echo $home ?>" id="#home" href="<?php echo $load ?>view/index.php">Inicio</a></li>
    <li><a class="<?php echo $evidence ?>" id="#evidence" href="<?php echo $load ?>view/evidence/index.php">Evidencia</a></li>
    <li><a class="<?php echo $menu ?>" id="#menu" href="<?php echo $load ?>view/menu/index.php">Menu</a></li>
    <li><a class="<?php echo $programs ?>" id="#program" href="<?php echo $load ?>view/program/index.php">Programas</a></li>
    <li><a class="<?php echo $school ?>" id="#school" href="<?php echo $load ?>view/school/index.php">Facultades</a></li>
    <li><a class="<?php echo $users ?>" id="#user" href="<?php echo $load ?>view/user/index.php">Usuarios</a></li>
    <!-- <li class="dropdown">
      <a href="#works" class="dropdown-toggle" data-toggle="dropdown">Menu con submenus <span class="caret"></span></a>
      <ul class="dropdown-menu animated fadeInLeft" role="menu">
        <div class="dropdown-header">Titulo del sub menu</div>
        <li><a href="#pictures">item 1</a></li>
        <li><a href="#videos">item 2</a></li>
        <li><a href="#books">item 3</a></li>
        <li><a href="#art">item 4</a></li>
        <li><a href="#awards">item 5</a></li>
      </ul>
    </li> -->
    <li><a id="#close" href="<?php echo $load ?>controller/closesesseion.php">Cerrar sesión</a></li>
  </ul>
</nav>