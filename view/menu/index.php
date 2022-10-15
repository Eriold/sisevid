<?php

// Start global page
global $activeHeader;
$activeHeader = '_MENU';
global $titleDocument;
$titleDocument = 'Página de listado de registros Menu';
include('../../controller/server.php');

$menuCode = isset($_GET['txtMenuCode']) ? $_GET['txtMenuCode'] : '';
$menuCode_error = true;

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
                                                <input type="number" name="txtMenuCode" class="form-control" autocomplete="off" value="<?php echo $menuCode ?>">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="row">
                                    <div class="col mt-5">
                                        <a href="create.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Agregar un Menú</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    include('../../model/Menu.php');
                    include('../..//controller/ConnectionController.php');
                    include('../../controller/MenuController.php');

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
                                    echo '<a href="read.php?id=' . $res['Idmenus'] . '" class="mr-3" title="Ver información" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                                    echo '<a href="update.php?id=' . $res['Idmenus'] . '" class="mr-3" title="Actualizar información" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                                    echo '<a href="delete.php?id=' . $res['Idmenus'] . '" title="Borrar información" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
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
                                echo '<a href="read.php?id=' . $res['Idmenus'] . '" class="mr-3" title="Ver información" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                                echo '<a href="update.php?id=' . $res['Idmenus'] . '" class="mr-3" title="Actualizar información" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                                echo '<a href="delete.php?id=' . $res['Idmenus'] . '" title="Borrar información" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                echo "</td>";
                                echo "</tr>";
                                $menuCode_error = false;
                            }
                        }
                        echo "</tbody>";
                        echo "</table>";
                        if ($menuCode_error) {
                            echo '<div class="alert alert-danger"><em>No se encontraron resultados con el ID Menus </em><span class="font-weight-bold">', $menuCode, '</span></div>';
                        }
                    } else {
                        echo '<div class="alert alert-danger"><em>No existe información en la base de datos.</em></div>';
                    }
