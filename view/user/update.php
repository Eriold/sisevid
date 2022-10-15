<?php
global $activeHeader;
$activeHeader = '_UPDATE';
global $titleDocument;
$titleDocument = 'Página de actualización';
include('../components/head.php');
include('../components/header.php');
include('../../model/User.php');
include('../../controller/UserController.php');
include('../../controller/server.php');
include('../../controller/ConnectionController.php');

$userCode = $userUser = $userPassword  = $userEmail = "";
$idRoles = 0;
$userCode_error  = $userUser_error  = $userPassword_error = $userEmail_error = $idRoles = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $inputUserUser = trim($_POST["txtUserUser"]);
    if (empty($inputUserUser)) {
        $userUser_error = "Debe ingresar un usuario";
    } else {
        $userUser = $inputUserUser;
    }
    $inputUserPassword = trim($_POST["txtUserPassword"]);
    if (empty($inputUserPassword)) {
        $userPassword_error = "Debe ingresar una contraseña";
    } else {
        $userPassword = $inputUserPassword;
    }
    $inputUserEmail = trim($_POST["txtUserEmail"]);
    if (empty($inputUserEmail)) {
        $userEmail_error = "Debe ingresar un Email";
    } else {
        $userEmail = $inputUserEmail;
    }
    $inputIdRoles = trim($_POST["txtIdRoles"]);
    if (empty($inputIdRoles)) {
        $idRoles = "Debe ingresar el codigo del rol";
    } else {
        $idRoles = intval ($inputIdRoles);
    }
    if (empty($userCode_error) && empty($userUser_error) && empty($userPassword_error) && empty($userEmail_error)) {
        $objUser = new User($userCode, $userUser, $userPassword, $userEmail, $idRoles);
        $objUserConnetion = new UserController($objUser);
        $objUserController->update();
        header("location: index.php");
    }
} else {
    if (isset($_GET["id"]) && !empty(trim($_GET["id"]))) {
        $id = trim($_GET["id"]);
        $objUser = new User($id, "", "", "",0);
        $objUserController = new UserController($objUser);
        $resGet = $objUserController->read();
        foreach ($resGet as $item) {
            if ($item["Usuario"] && $item["Contrasena"] && $item["Correo"] && $item["Idroles"]) {
                $userCode = $item["Idusuarios"];
                $userUser = $item["Usuario"];
                $userPassword = $item["Contrasena"];
                $userEmail = $item["Correo"];
                $idRoles = $item["Idroles"];
            } else {
                header("location: ../error.php");
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">


<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Datos de los usuarios</h2>
                    <p>Puedes editar los campos y enviarlos para actualizarlos en la base de datos.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group">
                            <label>ID Usuario</label>
                            <input type="text" name="txtSchoolCode" class="form-control" readonly value="<?php echo $schoolCode ?>">
                            <span class="invalid-feedback"><?php echo $schoolCode_error; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" name="txtSchoolName" class="form-control <?php echo (!empty($schoolName_error)) ? 'is-invalid' : ''; ?>" value="<?php echo $schoolName ?>">
                            <span class="invalid-feedback"><?php echo $schoolName_error; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Decano</label>
                            <input type="text" name="txtSchoolDean" class="form-control <?php echo (!empty($schoolDean_error)) ? 'is-invalid' : ''; ?>" value="<?php echo $schoolDean ?>">
                            <span class="invalid-feedback"><?php echo $schoolDean_error; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Nombre IES</label>
                            <input type="text" name="txtSchoolIES" class="form-control <?php echo (!empty($schoolIES_error)) ? 'is-invalid' : ''; ?>" value="<?php echo $schoolIES ?>">
                            <span class="invalid-feedback"><?php echo $schoolIES_error; ?></span>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Actualizar">
                        <a href="index.php" class="btn btn-secondary ml-2">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>