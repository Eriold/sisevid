<?php

// Start global page
global $activeHeader;
$activeHeader = '_HOME';
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
    <link rel="stylesheet" href="./assets/css/style.css">
    <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>
    <!– Permisos para acceder a reportes y tablas –>
    <script src="C:/xampp/htdocs/sisevid/view/user/validateuser.js"></script>
</head>
<?php include('./components/head.php'); ?>

<body>
    <?php include('./components/headergeneral.php'); ?>
    <section id="hero" class="d-flex align-items-center justify-content-center">
        <div class="container" data-aos="fade-up">

            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
                <div class="col-xl-6 col-lg-8">
                    <h1>Sisevid<span>.</span></h1>
                    <h2>La plataforma para guardar proyectos</h2>
                </div>
            </div>

            <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
                <div class="col-xl-2 col-md-4">
                    <div class="icon-box">
                        <i class="ri-store-line">
                            <iconify-icon icon="et:search"></iconify-icon>
                        </i>
                        <h3><a>Consulta</a></h3>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4">
                    <div class="icon-box">
                        <i class="ri-bar-chart-box-line">
                            <iconify-icon icon="fluent-mdl2:report-lock"></iconify-icon>
                        </i>
                        <h3><a href="">Reporta</a></h3>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4">
                    <div class="icon-box">
                        <i class="ri-calendar-todo-line">
                            <iconify-icon icon="fluent:save-24-regular"></iconify-icon>
                        </i>
                        <h3><a href="">Guarda</a></h3>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4">
                    <div class="icon-box">
                        <i class="ri-paint-brush-line">
                            <iconify-icon icon="bi:list-check"></iconify-icon>
                        </i>
                        <h3><a href="">Monitorea</a></h3>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4">
                    <div class="icon-box">
                        <i class="ri-database-2-line">
                            <iconify-icon icon="fluent:phone-update-checkmark-20-regular"></iconify-icon>
                        </i>
                        <h3><a href="">Actualiza</a></h3>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Hero -->