<?php

session_start();
$_SESSION['close_session'] = ''; //Task, validate off session

include('../model/User.php');
include('../controller/ConnectionController.php');
include('../controller/UserController.php');
include('../controller/server.php');

// Start global page
global $activeHeader;
$activeHeader = '_LOGIN';
global $titleDocument;
$titleDocument = 'Página de inicio';

$sesionStart = true;
$email = $password = '';
$email_error = $password_error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputEmail = trim($_POST["txtEmail"]);
    if (empty($inputEmail)) {
        $email_error = "Debe ingresar un correo";
    } else {
        $email = $inputEmail;
    }

    $inputPassword = trim($_POST["txtPassword"]);
    if (empty($inputPassword)) {
        $password_error = "Debe ingresar una contraseña";
    } else {
        $password = $inputPassword;
    }
    if (empty($email_error) && empty($password_error)) {
        $objUser = new User('', '', $password, $email, 0);
        $objUserConnetion = new UserController($objUser);
        $rowRes = $objUserConnetion->userLogin();
        $sesionStart = $rowRes;
        if ($rowRes) {
            header("location: ../controller/checked.php");
        }
    }
}

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
    <link rel="icon" type="image/x-icon" href="assets/icon.png">
    <title>Página de ingreso</title>
</head>

<body>
    <?php include('./components/headergeneral.php'); ?>
    <div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class="modal-content">
                <div class="col-12 user-img">
                    <img src="https://raw.githubusercontent.com/cruizg93/CristianRuizBlog-LoginForm/master/static/img/user.png" />
                </div>
                <form class="col-12" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="form-group" id="user-group">
                        <input type="text" class="form-control <?php echo (!empty($email_error)) ? 'is-invalid' : ''; ?>" placeholder="Correo" name="txtEmail" />
                        <span class="invalid-feedback text-white"><?php echo $email_error; ?></span>
                    </div>
                    <div class="form-group" id="contrasena-group">
                        <input type="password" class="form-control <?php echo (!empty($password_error)) ? 'is-invalid' : ''; ?>" placeholder="Contraseña" name="txtPassword" />
                        <span class="invalid-feedback text-white"><?php echo $password_error; ?></span>
                    </div>
                    <button type="submit" class="btn btn-primary my-2"><i class="fas fa-sign-in-alt"></i> Ingresar </button>
                </form>
                <?php
                if (!$sesionStart == true) {
                    echo '<div class="alert alert-danger" role="alert">
                    Correo o contraseña son incorrectos
                </div>';
                }
                ?>
                <?php
                if ($_SESSION['close_session']) {
                    echo '<div class="alert alert-success" role="alert">
                    Te desconectaste con éxito.
                </div>';
                }
                ?>
            </div>
        </div>
    </div>

    <script>
        function validationEmail($inputEmail){
            var expReg= /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9]*[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/;
            var isTrue = expReg.test($inputEmail);
            if(isTrue==false) {
                alert('Email incorrect');
            }
        }
        function validationPassword ($inputPassword) {
            var expReg = /^(?=.[a-z])(?=.[A-Z])(?=.*\d)[a-zA-Z\d]{|}$/
            var isTrue = expReg.test($inputPassword);
            if(isTrue==false) {
                alert('Password incorrect');
            }
        }

    </script>
