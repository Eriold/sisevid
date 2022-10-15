<?php

// Start global page
global $activeHeader;
$activeHeader = '_ABOUT';
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
<?php include('./components/head.php'); ?>

<body>
    <?php include('./components/headergeneral.php'); ?>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <h1>Quienes somos</h1>