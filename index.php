<?php

// Start global page
global $activeHeader;
$activeHeader = '_HOME';
global $titleDocument;
$titleDocument = 'Página de inicio';
include('./controller/server.php');

?>

<!DOCTYPE html>
<html lang="en">
<?php include('./view/components/head.php'); ?>

<body>
    <?php include('./view/components/header.php'); ?>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                        <h2 class="pull-left">Detalles de Facultades</h2>
                        
                        <a href="./view/school/create.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Agregar una Facultad</a>
                    </div>
                    <?php
                    // Include config file
                    include('./model/School.php');
                    include('./controller/ConnectionController.php');
                    include('./controller/SchoolController.php');

                    // Attempt select query execution
                    $objSchool = new School('', '', '', '');
                    $objSchoolConnection = new SchoolController($objSchool);
                    $row = $objSchoolConnection->readAll();
                    if ($row > 0) {
                        echo '<table class="table table-bordered table-striped">';
                        echo "<thead>";
                        echo "<tr>";
                        echo "<th>Código</th>";
                        echo "<th>Nombre Facultad</th>";
                        echo "<th>Nombre del Decano</th>";
                        echo "<th>Nombre IES</th>";
                        echo "<th>Acciones</th>";
                        echo "</tr>";
                        echo "</thead>";
                        echo "<tbody>";
                        foreach ($row as $res) {
                            echo "<tr>";
                            echo "<td>" . $res['Idfacultades'] . "</td>";
                            echo "<td>" . $res['Nombre'] . "</td>";
                            echo "<td>" . $res['Decano'] . "</td>";
                            echo "<td>" . $res['Ies_nombre'] . "</td>";
                            echo "<td>";
                            echo '<a href="./view/school/read.php?id=' . $res['Idfacultades'] . '" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                            echo '<a href="./view/school/update.php?id=' . $res['Idfacultades'] . '" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                            echo '<a href="./view/school/delete.php?id=' . $res['Idfacultades'] . '" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                            echo "</td>";
                            echo "</tr>";
                        }
                        echo "</tbody>";
                        echo "</table>";
                    } else {
                        echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                    }