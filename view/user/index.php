<?php

// Start global page
global $activeHeader;
$activeHeader = '_USERS';
global $titleDocument;
$titleDocument = 'Página de usuarios';
include('../../controller/server.php');

$userCode = isset($_GET['txtUserCode']) ? $_GET['txtUserCode'] : '';
$userCode_error = true;

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
                    <h2 class="pull-left">Detalles de los usuarios</h2>
                    <div class="mt-5 mb-3 clearfix">
                        <div class="row">
                            <div class="col-6">
                                <div class="row">
                                    <div class="col mt-3">
                                        <form>
                                            <div class="form-group">
                                                <label>Consultar por ID Usuarios en la tabla</label>
                                                <input type="number" name="txtUserCode" class="form-control" autocomplete="off" value="<?php echo $userCode ?>">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="row">
                                    <div class="col mt-5">
                                        <a href="create.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Agregar un Usuario</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    include('../../model/User.php');
                    include('../../controller/ConnectionController.php');
                    include('../../controller/UserController.php');

                    // Attempt select query execution
                    $objUser = new User('', '', '', '', 0);
                    $objUserConnection = new UserController($objUser);
                    $row = $objUserConnection->readAll();
                    if ($row > 0) {
                        echo '<table class="table table-bordered table-striped">';
                        echo "<thead>";
                        echo "<tr>";
                        echo "<th>ID Usuario</th>";
                        echo "<th>Nombre Usuario</th>";
                        echo "<th>Password</th>";
                        echo "<th>Correo</th>";
                        echo "<th>ID Rol</th>";
                        echo "<th>Acciones</th>";
                        echo "</tr>";
                        echo "</thead>";
                        echo "<tbody>";
                        foreach ($row as $res) {
                            if ($userCode != '') {
                                if ($userCode == $res['Idusuarios']) {
                                    echo "<tr>";
                                    echo "<td>" . $res['Idusuarios'] . "</td>";
                                    echo "<td>" . $res['Usuario'] . "</td>";
                                    echo "<td>" . $res['Contrasena'] . "</td>";
                                    echo "<td>" . $res['Correo'] . "</td>";
                                    echo "<td>" . $res['Idroles'] . "</td>";
                                    echo "<td>";
                                    echo '<a href="read.php?id=' . $res['Idusuarios'] . '" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                                    echo '<a href="update.php?id=' . $res['Idusuarios'] . '" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                                    echo '<a href="delete.php?id=' . $res['Idusuarios'] . '" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                    echo "</td>";
                                    echo "</tr>";
                                    if ($res['Idusuarios'] === null) {
                                        $userCode_error = true;
                                    } else {
                                        $userCode_error = false;
                                    }
                                }
                            } else {
                                echo "<tr>";
                                echo "<td>" . $res['Idusuarios'] . "</td>";
                                echo "<td>" . $res['Usuario'] . "</td>";
                                echo "<td>" . $res['Contrasena'] . "</td>";
                                echo "<td>" . $res['Correo'] . "</td>";
                                echo "<td>" . $res['Idroles'] . "</td>";
                                echo "<td>";
                                echo '<a href="read.php?id=' . $res['Idusuarios'] . '" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                                echo '<a href="update.php?id=' . $res['Idusuarios'] . '" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                                echo '<a href="delete.php?id=' . $res['Idusuarios'] . '" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                echo "</td>";
                                echo "</tr>";
                                $userCode_error = false;
                            }
                        }
                        echo "</tbody>";
                        echo "</table>";
                        if ($userCode_error) {
                            echo '<div class="alert alert-danger"><em>No se encontraron resultados con el ID Menus </em><span class="font-weight-bold">', $userCode, '</span></div>';
                        }
                    } else {
                        echo '<div class="alert alert-danger"><em>No existe información en la base de datos.</em></div>';
                    }
