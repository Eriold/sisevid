<?php
include('../../model/User.php');
include('../../controller/ConnectionController.php');
include('../../controller/UserController.php');
include('../../controller/server.php');

global $activeHeader;
$activeHeader = '_CREATE';
global $titleDocument;
$titleDocument = 'Página de solo lectura';
$userCode = $userUser = $userPassword  = $userEmail = $idRoles = "";

if ($userCode = trim($_GET["id"])) {
    $objUser = new User($userCode, '', '', '', 0);
    $objUserConnetion = new UserController($objUser);
    $row = $objUserConnetion->read();
    if (count($row) > 0) {
        foreach ($row as $res) {
            $userUser = $res['Usuario'];
            $userPassword = $res['Contrasena'];
            $userEmail = $res['Correo'];
            $idRoles = $res['Idroles'];
        }
    } else {
       // header("location: ../error.php");
    }
} else {
   // header("location: ../error.php");
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
                            <label>Código del usuario</label>
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
                            <label>Rol</label>
                            <input type="text" class="form-control" value="<?php echo $idRoles ?>" readonly>
                        </div>
                        <a href="../../index.php" class="btn btn-primary">Regresar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>