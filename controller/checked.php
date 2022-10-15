<?php
session_start();
 
if(!isset($_SESSION['id_user']) && !isset($_SESSION['name_user'])){
    header('Location: index.php');
    exit;
} else {
    header('location: ../view/index.php');
    // switch($_SESSION['rol_id']) {
    //     case 'PLATFORM_ADMINISTRATOR_ALFA': 
    //         echo 'Administrador plataforma';
    //         header('Location: ');
    //         break;

    //     default:
    //         header('Location: index.php');
    // }
}
