<?php
session_start();
 
if(!isset($_SESSION['id_user']) && !isset($_SESSION['name_user'])){
    header('Location: index.php');
    exit;
    /*
} else {
    header('location: ../view/index.php');
     switch($_SESSION['rol_id']) {
         case '1': 
             echo 'Administrador(a) del sistema';
             header('location: home.php');

             break;
         case '2': 
             echo 'Verificador(a)';
             header('location: home.php');
             break;
         case '3': 
             echo 'Validador(a)';
             header('location: home.php');
             break;
         case '4': 
             echo 'Administrativo(a)';
             header('location: home.php');
             break;

         default:
             header('Location: index.php');
     } */
}
