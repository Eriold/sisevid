<?php
include('../../model/User.php');
include('../../controller/ConnectionController.php');
include('../../controller/UserController.php');
include('../../controller/server.php');

global $activeHeader;
$activeHeader = '_USERS';
global $titleDocument;
$titleDocument = 'Página de solo lectura';

$userCode = $userUser = $userPassword  = $userEmail = $idRoles = "";

$objRoles = new User('', '', '', '', 0);
$objRolesController = new UserController($objRoles);
$row = $objRolesController->getRoles();

if ($userCode = trim($_GET["id"])) {
    $objUser = new User($userCode, "", "", "", 0);
    $objUserController = new UserController($objUser);
    $resGet = $objUserController->read();
    if (count($resGet) > 0) {
        foreach ($resGet as $res) {
            $userCode = $res["Idusuarios"];
            $userUser = $res['Usuario'];
            $userPassword = $res['Contrasena'];
            $userEmail = $res['Correo'];
            $idRoles = $res['Idroles'];
        }
    } else {
        header("location: error.php");
    }
} else {
    header("location: error.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<?php include('../components/head.php') ?>

<body>
<?php include('../components/header.php') ?>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Información detallada del Usuario</h2>
                    <form>
                        <div class="form-group">
                            <label>Cedula del usuario</label>
                            <input type="text" class="form-control" value="<?php echo $userCode ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label>Nombre de usuario</label>
                            <input type="text" class="form-control" value="<?php echo $userUser ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="pass" class="form-control" value="<?php echo $userPassword ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" value="<?php echo $userEmail ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label>Rol de usuario</label>
                            <div class="input-group mb-3">
                                <select class="custom-select form-control" id="inputGroupSelect02" name="dpdtxtProgramCodeSchool" disabled>
                                    <?php
                                    foreach ($row as $item) {
                                        echo "<option value=''>", $item['Nombre'], "</option>";
                                        if ($item['Idroles'] == $idRoles) {
                                        }
                                    }
                                    ?>
                                </select>
                                <div class="input-group-append">
                                    <label class="input-group-text" for="inputGroupSelect02">Opciones...</label>
                                </div>
                            </div>
                        </div>
                        <a href="index.php" class="btn btn-primary">Regresar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>