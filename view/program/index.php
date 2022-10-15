<?php

// Start global page
global $activeHeader;
$activeHeader = '_HOME';
global $titleDocument;
$titleDocument = 'Página de inicio';
include('../../controller/server.php');

$idProgramas = isset($_GET['txtIdPrograms']) ? $_GET['txtIdPrograms'] : '';
$idProgramas_error = true;

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
                    <h2 class="pull-left">Tabla de registros de programas</h2>
                    <div class="mt-5 mb-3 clearfix">
                        <div class="row">
                            <div class="col-6">
                                <div class="row">
                                    <div class="col mt-3">
                                        <form>
                                            <div class="form-group">
                                                <label>Consultar por ID Programas</label>
                                                <input type="number" name="txtIdPrograms" class="form-control" autocomplete="off" value="<?php echo $idProgramas ?>">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="row">
                                    <div class="col mt-5">
                                        <a href="create.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Agregar un Programa</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    include('../../model/Program.php');
                    include('../../controller/ConnectionController.php');
                    include('../../controller/ProgramController.php');

                    // Attempt select query execution
                    $objProgram = new Program('', '', '', '', 0);
                    $objProgramConnection = new ProgramController($objProgram);
                    $row = $objProgramConnection->readAll();
                    if ($row > 0) {
                        echo '<table class="table table-bordered table-striped">';
                        echo "<thead>";
                        echo "<tr>";
                        echo "<th>ID Programas</th>";
                        echo "<th>Nombre Programa</th>";
                        echo "<th>Alta Calidad</th>";
                        echo "<th>COD IES</th>";
                        echo "<th>ID Facultades</th>";
                        echo "<th>Acciones</th>";
                        echo "</tr>";
                        echo "</thead>";
                        echo "<tbody>";
                        foreach ($row as $res) {
                            if ($idProgramas != '') {
                                if ($idProgramas == $res['Idprogramas']) {
                                    echo "<tr>";
                                    echo "<td>" . $res['Idprogramas'] . "</td>";
                                    echo "<td>" . $res['Nombre'] . "</td>";
                                    echo "<td>" . $res['Altacalidad'] . "</td>";
                                    echo "<td>" . $res['Codsnies'] . "</td>";
                                    echo "<td>" . $res['IDFacultades'] . "</td>";
                                    echo "<td>";
                                    echo '<a href="read.php?id=' . $res['Idprogramas'] . '" class="mr-3" title="Ver información" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                                    echo '<a href="update.php?id=' . $res['Idprogramas'] . '" class="mr-3" title="Actualizar información" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                                    echo '<a href="delete.php?id=' . $res['Idprogramas'] . '" title="Borrar información" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                    echo "</td>";
                                    echo "</tr>";
                                    if ($res['Idprogramas'] === null) {
                                        $idProgramas_error = true;
                                    } else {
                                        $idProgramas_error = false;
                                    }
                                }
                            } else {
                                echo "<tr>";
                                echo "<td>" . $res['Idprogramas'] . "</td>";
                                echo "<td>" . $res['Nombre'] . "</td>";
                                echo "<td>" . $res['Altacalidad'] . "</td>";
                                echo "<td>" . $res['Codsnies'] . "</td>";
                                echo "<td>" . $res['IDFacultades'] . "</td>";
                                echo "<td>";
                                echo '<a href="read.php?id=' . $res['Idprogramas'] . '" class="mr-3" title="Ver información" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                                echo '<a href="update.php?id=' . $res['Idprogramas'] . '" class="mr-3" title="Actualizar información" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                                echo '<a href="delete.php?id=' . $res['Idprogramas'] . '" title="Borrar información" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                echo "</td>";
                                echo "</tr>";
                                $idProgramas_error = false;
                            }
                        }
                        echo "</tbody>";
                        echo "</table>";
                        if ($idProgramas_error) {
                            echo '<div class="alert alert-danger"><em>No se encontraron resultados con el ID Programas </em><span class="font-weight-bold">', $idProgramas, '</span></div>';
                        }
                    } else {
                        echo '<div class="alert alert-danger"><em>No existe información en la base de datos.</em></div>';
                    }
