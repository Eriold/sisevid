<?php
include('../../model/User.php');
include('../../controller/ConnectionController.php');
include('../../controller/UserController.php');
include('../../controller/server.php');

global $activeHeader;
$activeHeader = '_CREATE';
global $titleDocument;
$titleDocument = 'Página de guardado';
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

    //check input error is empty to insert
    if (empty($userUser_error) && empty($userPassword_error) && empty($userEmail_error)) {
        $objUser = new User('', $userUser, $userPassword, $userEmail, $idRoles);
        $objUserConnetion = new UserController($objUser);
        $objUserConnetion->create();
        //header("location: ../../index.php");
    }
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
                    <h2 class="mt-5">Registrar Usuarios</h2>
                    <p>Debes completar el formulario para registrar el Usuario</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        
                        <div class="form-group">
                            <label>Nombre del usuario</label>
                            <input type="text" name="txtUserUser" class="form-control <?php echo (!empty($userUser_error)) ? 'is-invalid' : ''; ?>">
                            <span class="invalid-feedback"><?php echo $userUser_error; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Ingrese la contraseña</label>
                            <input type="password" name="txtUserPassword" class="form-control <?php echo (!empty($userPassword_error)) ? 'is-invalid' : ''; ?>">
                            <span class="invalid-feedback"><?php echo $userPassword_error; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Ingrese el Email</label>
                            <input type="email" name="txtUserEmail" class="form-control <?php echo (!empty($userEmail_error)) ? 'is-invalid' : ''; ?>">
                            <span class="invalid-feedback"><?php echo $userEmail_error; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Codigo de los roles</label>
                            <input type="number" name="txtIdRoles" class="form-control <?php echo (!empty($idRoles)) ? 'is-invalid' : ''; ?>">
                            <span class="invalid-feedback"><?php echo $idRoles; ?></span>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Enviar">
                        <a href="../../index.php" class="btn btn-secondary ml-2">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>