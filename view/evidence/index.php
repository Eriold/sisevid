<?php

// Start global page
global $activeHeader;
$activeHeader = '_HOME';
global $titleDocument;
$titleDocument = 'Página de listado de registros Menu';
include('../../controller/server.php');

$IdEvidencia = isset($_GET['txtIdEvidencia']) ? $_GET['txtIdEvidencia'] : '';
$IdEvidencia_error = true;

echo $IdEvidencia, 'SIII';
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
                    <h2 class="pull-left">Tabla de registros de menú</h2>
                    <div class="mt-5 mb-3 clearfix">
                        <div class="row">
                            <div class="col-6">
                                <div class="row">
                                    <div class="col mt-3">
                                        <form>
                                            <div class="form-group">
                                                <label>Consultar por ID Menu</label>
                                                <input type="number" name="txtIdEvidencia" class="form-control" autocomplete="off" value="<?php echo $IdEvidencia ?>">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="row">
                                    <div class="col mt-5">
                                        <a href="create.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Agregar una Evidencia</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    include('../../model/Evidence.php');
                    include('../..//controller/ConnectionController.php');
                    include('../../controller/EvidenceController.php');

                    // Attempt select query execution
                    $objEvidence = new Evidence('', '', '');
                    $objEvidenceConnection = new EvidenceController($objEvidence);
                    $row = $objEvidenceConnection->read();
                    if ($row > 0) {
                        echo '<table class="table table-bordered table-striped">';
                        echo "<thead>";
                        echo "<tr>";
                        echo "<th>ID Evidencia</th>";
                        echo "<th>Nombre</th>";
                        echo "<th>ID Artículo</th>";
                        echo "<th>Acciones</th>";
                        echo "</tr>";
                        echo "</thead>";
                        echo "<tbody>";
                        foreach ($row as $res) {
                            if ($IdEvidencia != '') {
                                if ($IdEvidencia == $res['Idevidencias']) {
                                    echo "<tr>";
                                    echo "<td>" . $res['Idevidencias'] . "</td>";
                                    echo "<td>" . $res['Nombre'] . "</td>";
                                    echo "<td>" . $res['Idarticulos'] . "</td>";
                                    echo "<td>";
                                    echo '<a href="read.php?id=' . $res['Idevidencias'] . '" class="mr-3" title="Ver información" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                                    echo '<a href="update.php?id=' . $res['Idevidencias'] . '" class="mr-3" title="Actualizar información" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                                    echo '<a href="delete.php?id=' . $res['Idevidencias'] . '" title="Borrar información" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                    echo "</td>";
                                    echo "</tr>";
                                    if ($res['Idevidencias'] === null) {
                                        $IdEvidencia_error = true;
                                    } else {
                                        $IdEvidencia_error = false;
                                    }
                                }
                            } else {
                                echo "<tr>";
                                echo "<td>" . $res['Idevidencias'] . "</td>";
                                echo "<td>" . $res['Nombre'] . "</td>";
                                echo "<td>" . $res['Idarticulos'] . "</td>";
                                echo "<td>";
                                echo '<a href="read.php?id=' . $res['Idevidencias'] . '" class="mr-3" title="Ver información" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                                echo '<a href="update.php?id=' . $res['Idevidencias'] . '" class="mr-3" title="Actualizar información" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                                echo '<a href="delete.php?id=' . $res['Idevidencias'] . '" title="Borrar información" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                echo "</td>";
                                echo "</tr>";
                                $IdEvidencia_error = false;
                            }
                        }
                        echo "</tbody>";
                        echo "</table>";
                        if ($IdEvidencia_error) {
                            echo '<div class="alert alert-danger"><em>No se encontraron resultados con el ID Evidencia </em><span class="font-weight-bold">', $IdEvidencia, '</span></div>';
                        }
                    } else {
                        echo '<div class="alert alert-danger"><em>No existe información en la base de datos.</em></div>';
                    }
