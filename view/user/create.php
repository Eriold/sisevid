<?php
include('../../model/User.php');
include('../../model/RolUser.php');
include('../../controller/ConnectionController.php');
include('../../controller/UserController.php');
include('../../controller/RolUserControler.php');
include('../../controller/server.php');

global $activeHeader;
$activeHeader = '_USERS';
global $titleDocument;
$titleDocument = 'Página de guardado';

$userCode = $userUser = $userPassword  = $userEmail = "";
$idRoles = [];
$userCode_error  = $userUser_error  = $userPassword_error = $userEmail_error = $idRoles_error = "";

$objRoles = new User('', '', '', '', 0);
$objRolesController = new UserController($objRoles);
$row = $objRolesController->getRoles();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $inputUserCode = trim($_POST["txtUserCode"]);
    if (empty($inputUserCode)) {
        $userCode_error = "Debe ingresar una cédula";
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


    $inputIdRoles = $_POST["dpdtxtUserRol"];
    if (count($inputIdRoles) < 0) {
        $idRoles_error = "Debe asignar un rol";
    } else {
        $idRoles = $inputIdRoles;
    }

    //check input error is empty to insert
    if (empty($userUser_error) && empty($userPassword_error) && empty($userEmail_error) && empty($userCode_error) && empty($idRoles_error)) {
        $objUser = new User($userCode, $userUser, $userPassword, $userEmail, '5');
        $objUserConnetion = new UserController($objUser);
        $objUserConnetion->create();

        foreach($idRoles as $role) {
            $objRolUser = new RolUser($role, $userCode);
            $objRolUserController = new RolUserController($objRolUser);
            $objRolUserController->createListRol();
        }
        header("location: index.php");
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
                            <label>Cedula del usuario</label>
                            <input type="text" name="txtUserCode" class="form-control <?php echo (!empty($userCode_error)) ? 'is-invalid' : ''; ?>">
                            <span class="invalid-feedback"><?php echo $userCode_error; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Nombre del usuario</label>
                            <input type="text" name="txtUserUser" class="form-control <?php echo (!empty($userUser_error)) ? 'is-invalid' : ''; ?>">
                            <span class="invalid-feedback"><?php echo $userUser_error; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Ingrese el Email</label>
                            <input type="email" name="txtUserEmail" class="form-control <?php echo (!empty($userEmail_error)) ? 'is-invalid' : ''; ?>">
                            <span class="invalid-feedback"><?php echo $userEmail_error; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Ingrese la contraseña</label>
                            <input type="password" name="txtUserPassword" class="form-control <?php echo (!empty($userPassword_error)) ? 'is-invalid' : ''; ?>">
                            <span class="invalid-feedback"><?php echo $userPassword_error; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Roles</label>
                            <div class="input-group mb-3">
                                <select class="selectpicker custom-select form-control <?php echo (!empty($idRoles_error)) ? 'is-invalid' : ''; ?>" id="inputGroupSelect02" name="dpdtxtUserRol[]" multiple="multiple" data-live-search="true">

                                    <?php
                                    foreach ($row as $item) {
                                        echo '<option value="', $item['idRol'], '">', $item['name'], '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <span class="invalid-feedback d-block"><?php echo $idRoles_error; ?></span>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Enviar">
                        <a href="index.php" class="btn btn-secondary ml-2">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>