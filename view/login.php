<?php

// Start global page
global $activeHeader;
$activeHeader = '_LOGIN';
global $titleDocument;
$titleDocument = 'Página de inicio';
include('../controller/server.php');

$schoolCode = isset($_GET['txtSchoolCode']) ? $_GET['txtSchoolCode'] : '';
$schoolCode_error = true;
$menuCode = isset($_GET['txtMenuCode']) ? $_GET['txtMenuCode'] : '';
$menuCode_error = true;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./assets/css/login.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <title>Página de ingreso</title>
    <?php include('./components/head.php'); ?>
</head>

<body>
    <?php include('./components/headergeneral.php'); ?>
    <div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class="modal-content">
                <div class="col-12 user-img">
                    <img src="https://raw.githubusercontent.com/cruizg93/CristianRuizBlog-LoginForm/master/static/img/user.png" />
                </div>
                <form class="col-12" action="" method="post">
                    <div class="form-group" id="user-group">
                        <input type="text" class="form-control" placeholder="Nombre de usuario" name="username" />
                    </div>
                    <div class="form-group" id="contrasena-group">
                        <input type="password" class="form-control" placeholder="Contrasena" name="password" />
                    </div>
                    <button type="submit" class="btn btn-primary my-2"><i class="fas fa-sign-in-alt"></i> Ingresar </button>
                </form>
                <!-- <div class="col-12 forgot">
                    <a href="#">Recordar contrasena?</a>
                </div> -->
                <div class="alert alert-danger" role="alert">
                    Contraseña inválida.
                </div>
                <div class="alert alert-success" role="alert">
                    Te desconectaste con éxito.
                </div>
            </div>
        </div>
    </div>