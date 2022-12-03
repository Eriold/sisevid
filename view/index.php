<?php
session_start();
global $activeHeader;
$activeHeader = '_HOME';
global $titleDocument;
$titleDocument = 'Página de bienvenida';

include('../controller/RolUserControler.php');
include('../controller/ConnectionController.php');
include('../model/RolUser.php');
include('../controller/server.php');

$objRolUser = new RolUser('',$_SESSION['id_user']);
$objRolUserController = new RolUserController($objRolUser);
$row = $objRolUserController->findRoles();
$_SESSION['rol_list'] = $row;

?>
<!DOCTYPE html>
<html lang="en">

<?php include('./components/head.php') ?>

<body>
    <?php include('./components/header.php') ?>
</body>
<div class="wrapper2">
    <h1>Hola <span style="color: blue"><?php echo $_SESSION['name_user'] ?></span> Bienvenido a sisevid </h1>
    <?php
    foreach($_SESSION['rol_list'] as $rol){
        echo $rol[0];
    }?>
</div>

</html>