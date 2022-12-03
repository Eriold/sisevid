<?php
if(empty($_SESSION['id_user'])) {
  session_start();
}
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
if (!isset($_SESSION['id_user']) && !isset($_SESSION['name_user'])) {
  header('Location:' . $load . 'index.php');
  exit;
}

global $activeHeader;

$home = $evidence = $menu = $programs = $school = $users = '';
$evidence_active = $menu_active = $programs_active = $school_active = $users_active = false;

foreach($_SESSION['rol_list'] as $rol){
  if($rol == '1') {
    $users_active = true;
  }
  if($rol == '2') {
    $programs_active = true;
  }
  if($rol == '3') {
    $evidence_active = true;
  }
  if($rol == '4') {
    $school_active = true;
  }
}

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
    <?php if($evidence_active == true) echo '<li><a class="'.$evidence.'" id="#evidence" href="'.$load.'view/evidence/index.php">Evidencia</a></li>'?>
    <?php if($menu_active == true) echo '<li><a class="'.$menu.'" id="#menu" href="'.$load.'view/menu/index.php">Menu</a></li>'?>
    <?php if($programs_active == true) echo '<li><a class="'.$programs.'" id="#program" href="'.$load.'view/program/index.php">Programas</a></li>'?>
    <?php if($school_active == true) echo '<li><a class="'.$school.'" id="#school" href="'.$load.'view/school/index.php">Facultades</a></li>'?>
    <?php if($users_active == true) echo '<li><a class="'.$users.'" id="#user" href="'.$load.'view/user/index.php">Usuarios</a></li>'?>
    <li><a id="#close" href="<?php echo $load ?>controller/closesesseion.php">Cerrar sesión</a></li>
  </ul>
</nav>