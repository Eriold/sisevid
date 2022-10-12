<?php

// Start global page
global $activeHeader;
$activeHeader = '_HOME';
global $titleDocument;
$titleDocument = 'Página de inicio';
include('./controller/server.php');

$schoolCode = isset($_GET['txtSchoolCode']) ? $_GET['txtSchoolCode'] : '';
$schoolCode_error = true;
$menuCode = isset($_GET['txtMenuCode']) ? $_GET['txtMenuCode'] : '';
$menuCode_error = true;

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
                                        <a href="./view/program/create.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Agregar una Facultad</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    // Include config file
                   /* include('./model/School.php');
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
                                    echo '<a href="./view/school/read.php?id=' . $res['Idfacultades'] . '" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                                    echo '<a href="./view/school/update.php?id=' . $res['Idfacultades'] . '" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                                    echo '<a href="./view/school/delete.php?id=' . $res['Idfacultades'] . '" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
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
                                echo '<a href="./view/school/read.php?id=' . $res['Idfacultades'] . '" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                                echo '<a href="./view/school/update.php?id=' . $res['Idfacultades'] . '" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                                echo '<a href="./view/school/delete.php?id=' . $res['Idfacultades'] . '" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
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
                    }*/

                    //trying crud menu
                    /*include('./model/Menu.php');
                    include('./controller/ConnectionController.php');
                    include('./controller/MenuController.php');

                    // Attempt select query execution
                    $objMenu = new Menu('', '', '');
                    $objMenuConnection = new MenuController($objMenu);
                    $row = $objMenuConnection->readAll();
                    if ($row > 0) {
                        echo '<table class="table table-bordered table-striped">';
                        echo "<thead>";
                        echo "<tr>";
                        echo "<th>ID Menu</th>";
                        echo "<th>Nombre Menu</th>";
                        echo "<th>Menu Descripcion</th>";
                        echo "<th>Acciones</th>";
                        echo "</tr>";
                        echo "</thead>";
                        echo "<tbody>";
                        foreach ($row as $res) {
                            if ($menuCode != '') {
                                if ($menuCode == $res['Idmenus']) {
                                    echo "<tr>";
                                    echo "<td>" . $res['Idmenus'] . "</td>";
                                    echo "<td>" . $res['Nombre'] . "</td>";
                                    echo "<td>" . $res['Descripcion'] . "</td>";
                                    echo "<td>";
                                    echo '<a href="./view/menu/read.php?id=' . $res['Idmenus'] . '" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                                    echo '<a href="./view/menu/update.php?id=' . $res['Idmenus'] . '" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                                    echo '<a href="./view/menu/delete.php?id=' . $res['Idmenus'] . '" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                    echo "</td>";
                                    echo "</tr>";
                                    if ($res['Idmenus'] === null) {
                                        $menuCode_error = true;
                                    } else {
                                        $menuCode_error = false;
                                    }
                                }
                            } else {
                                echo "<tr>";
                                echo "<td>" . $res['Idmenus'] . "</td>";
                                echo "<td>" . $res['Nombre'] . "</td>";
                                echo "<td>" . $res['Descripcion'] . "</td>";
                                echo "<td>";
                                echo '<a href="./view/menu/read.php?id=' . $res['Idmenus'] . '" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                                echo '<a href="./view/menu/update.php?id=' . $res['Idmenus'] . '" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                                echo '<a href="./view/menu/delete.php?id=' . $res['Idmenus'] . '" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                echo "</td>";
                                echo "</tr>";
                                $menuCode_error = false;
                            }
                        }
                        echo "</tbody>";
                        echo "</table>";
                        if ($menuCode_error) {
                            echo '<div class="alert alert-danger"><em>No se encontraron resultados con el ID Menus </em><span class="font-weight-bold">', $schoolCode, '</span></div>';
                        }
                    } else {
                        echo '<div class="alert alert-danger"><em>No existe información en la base de datos.</em></div>';
                    }*/
                    include('./model/Program.php');
                    include('./controller/ConnectionController.php');
                    include('./controller/ProgramController.php');

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
                            if ($menuCode != '') {
                                if ($menuCode == $res['Idprogramas']) {
                                    echo "<tr>";
                                    echo "<td>" . $res['Idprogramas'] . "</td>";
                                    echo "<td>" . $res['Nombre'] . "</td>";
                                    echo "<td>" . $res['Altacalidad'] . "</td>";
                                    echo "<td>" . $res['Codsnies'] . "</td>";
                                    echo "<td>" . $res['IDFacultades'] . "</td>";
                                    echo "<td>";
                                    echo '<a href="./view/program/read.php?id=' . $res['Idprogramas'] . '" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                                    echo '<a href="./view/program/update.php?id=' . $res['Idprogramas'] . '" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                                    echo '<a href="./view/program/delete.php?id=' . $res['Idprogramas'] . '" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                    echo "</td>";
                                    echo "</tr>";
                                    if ($res['Idprogramas'] === null) {
                                        $menuCode_error = true;
                                    } else {
                                        $menuCode_error = false;
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
                                echo '<a href="./view/program/read.php?id=' . $res['Idprogramas'] . '" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                                echo '<a href="./view/program/update.php?id=' . $res['Idprogramas'] . '" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                                echo '<a href="./view/program/delete.php?id=' . $res['Idprogramas'] . '" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                echo "</td>";
                                echo "</tr>";
                                $menuCode_error = false;
                            }
                        }
                        echo "</tbody>";
                        echo "</table>";
                        if ($menuCode_error) {
                            echo '<div class="alert alert-danger"><em>No se encontraron resultados con el ID Menus </em><span class="font-weight-bold">', $schoolCode, '</span></div>';
                        }
                    } else {
                        echo '<div class="alert alert-danger"><em>No existe información en la base de datos.</em></div>';
                    }
