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
$userCode_error  = $userUser_error  = $userPassword_error = $userEmail_error = $idRoles_error = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $inputUserCode = trim($_POST["txtUserCode"]);
    if (empty($inputUserCode)) {
        $userCode_error = "Debe ingresar el codigo";
    } else {
        $userCode = $inputUserCode;
    }
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
        $idRoles_error = "Debe ingresar el codigo del rol";
    } else {
        $idRoles = intval ($inputIdRoles);
    }
    if (empty($userCode_error) && empty($userUser_error) && empty($userPassword_error) && empty($userEmail_error) && empty($idRoles_error)) {
        $objUser = new User($userCode, $userUser, $userPassword, $userEmail, $idRoles);
        $objUserController = new UserController($objUser);
        $objUserController->update();
        //header("location: index.php");
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
                            <input type="text" name="txtUserCode" class="form-control" readonly value="<?php echo $userCode ?>">
                            <span class="invalid-feedback"><?php echo $userCode_error; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Nombre Usuario</label>
                            <input type="text" name="txtUserUser" class="form-control <?php echo (!empty($userCode_error)) ? 'is-invalid' : ''; ?>" value="<?php echo $userUser ?>">
                            <span class="invalid-feedback"><?php echo $userUser_error; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="text" name="txtUserPassword" class="form-control <?php echo (!empty($userPassword_error)) ? 'is-invalid' : ''; ?>" value="<?php echo $userPassword ?>">
                            <span class="invalid-feedback"><?php echo $userPassword_error; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Correo</label>
                            <input type="text" name="txtUserEmail" class="form-control <?php echo (!empty($userEmail_error)) ? 'is-invalid' : ''; ?>" value="<?php echo $userEmail ?>">
                            <span class="invalid-feedback"><?php echo $userEmail_error; ?></span>
                        </div>
                        <div class="form-group">
                            <label>ID Rol</label>
                            <input type="number" name="txtIdRoles" class="form-control <?php echo (!empty($idRoles_error)) ? 'is-invalid' : ''; ?>" value="<?php echo $idRoles ?>">
                            <span class="invalid-feedback"><?php echo $idRoles_error; ?></span>
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