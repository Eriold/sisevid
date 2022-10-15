<?php

// Start global page
global $activeHeader;
$activeHeader = '_SCHOOL';
global $titleDocument;
$titleDocument = 'Página de facultades';
include('../../controller/server.php');

$schoolCode = isset($_GET['txtSchoolCode']) ? $_GET['txtSchoolCode'] : '';
$schoolCode_error = true;

?>

<!DOCTYPE html>
<html lang="en">
<?php include('../components/head.php'); ?>

<body>
    <?php include('../components/header.php'); ?>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="pull-left">Detalles de Facultades</h2>
                    <div class="mt-5 mb-3 clearfix">
                        <div class="row">
                            <div class="col-6">
                                <div class="row">
                                    <div class="col mt-3">
                                        <form>
                                            <div class="form-group">
                                                <label>Consultar por ID Facultad en la tabla</label>
                                                <input type="number" name="txtSchoolCode" class="form-control" autocomplete="off" value="<?php echo $schoolCode ?>">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="row">
                                    <div class="col mt-5">
                                        <a href="create.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Agregar una Facultad</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    // Include config file
                    include('../../model/School.php');
                    include('../../controller/ConnectionController.php');
                    include('../../controller/SchoolController.php');

                    // Attempt select query execution
                    $objSchool = new School('', '', '', '');
                    $objSchoolConnection = new SchoolController($objSchool);
                    $row = $objSchoolConnection->readAll();
                    if ($row > 0) {
                        echo '<table class="table table-bordered table-striped">';
                        echo "<thead>";
                        echo "<tr>";
                        echo "<th>ID Facultad</th>";
                        echo "<th>Nombre Facultad</th>";
                        echo "<th>Nombre del Decano</th>";
                        echo "<th>Nombre IES</th>";
                        echo "<th>Acciones</th>";
                        echo "</tr>";
                        echo "</thead>";
                        echo "<tbody>";
                        foreach ($row as $res) {
                            if ($schoolCode != '') {
                                if ($schoolCode == $res['Idfacultades']) {
                                    echo "<tr>";
                                    echo "<td>" . $res['Idfacultades'] . "</td>";
                                    echo "<td>" . $res['Nombre'] . "</td>";
                                    echo "<td>" . $res['Decano'] . "</td>";
                                    echo "<td>" . $res['Ies_nombre'] . "</td>";
                                    echo "<td>";
                                    echo '<a href="read.php?id=' . $res['Idfacultades'] . '" class="mr-3" title="Ver información" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                                    echo '<a href="update.php?id=' . $res['Idfacultades'] . '" class="mr-3" title="Actualizar información" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                                    echo '<a href="delete.php?id=' . $res['Idfacultades'] . '" title="Borrar información" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                    echo "</td>";
                                    echo "</tr>";
                                    if ($res['Idfacultades'] === null) {
                                        $schoolCode_error = true;
                                    } else {
                                        $schoolCode_error = false;
                                    }
                                }
                            } else {
                                echo "<tr>";
                                echo "<td>" . $res['Idfacultades'] . "</td>";
                                echo "<td>" . $res['Nombre'] . "</td>";
                                echo "<td>" . $res['Decano'] . "</td>";
                                echo "<td>" . $res['Ies_nombre'] . "</td>";
                                echo "<td>";
                                echo '<a href="read.php?id=' . $res['Idfacultades'] . '" class="mr-3" title="Ver información" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                                echo '<a href="update.php?id=' . $res['Idfacultades'] . '" class="mr-3" title="Actualizar información" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                                echo '<a href="delete.php?id=' . $res['Idfacultades'] . '" title="Borrar información" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                echo "</td>";
                                echo "</tr>";
                                $schoolCode_error = false;
                            }
                        }
                        echo "</tbody>";
                        echo "</table>";
                        if ($schoolCode_error) {
                            echo '<div class="alert alert-danger"><em>No se encontraron resultados con el ID Facultad </em><span class="font-weight-bold">', $schoolCode, '</span></div>';
                        }
                    } else {
                        echo '<div class="alert alert-danger"><em>No existe información en la base de datos.</em></div>';
                    }
