<?php
global $activeHeader;
$activeHeader = '_UPDATE';
global $titleDocument;
$titleDocument = 'Página de actualización';
include('../components/head.php');
include('../components/header.php');
include('../../model/Menu.php');
include('../../controller/MenuController.php');
include('../../controller/server.php');
include('../../controller/ConnectionController.php');

$menuCode = $menuName = $menuDescription = "";
$menuCode_error = $menuName_error = $menuDescription_error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputMenuCode = trim($_POST["txtMenuCode"]);
    if (empty($inputMenuCode)) {
        $menuCode_error = "Debe ingresar el código del Menu";
    } else {
        $menuCode = $inputMenuCode;
    }
    $inputMenuName = trim($_POST["txtMenuName"]);
    if (empty($inputMenuName)) {
        $menuName_error = "Debe ingresar el nombre del Menu";
    } else {
        $menuName = $inputMenuName;
    }
    $inputMenuDescription = trim($_POST["txtMenuDescription"]);
    if (empty($inputMenuDescription)) {
        $menuDescription_error = "Debe ingresar la descripcion del Menu";
    } else {
        $menuDescription = $inputMenuDescription;
    }
    if (empty($menuCode_error) && empty($menuName_error) && empty($menuDescription_error)) {
        $objMenu = new Menu($menuCode, $menuName, $menuDescription);
        $objMenuController = new MenuController($objMenu);
        $objMenuController->update();
        header("location: ../../index.php");
    }
} else {
    if (isset($_GET["id"]) && !empty(trim($_GET["id"]))) {
        $id = trim($_GET["id"]);
        $objMenu = new Menu($id, "", "");
        $objMenuController = new MenuController($objMenu);
        $resGet = $objMenuController->read();
        foreach ($resGet as $item) {
            if ($item["Nombre"] && $item["Descripcion"]) {
                $menuCode = $item["Idmenus"];
                $menuName = $item["Nombre"];
                $menuDescription = $item["Descripcion"];
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
                    <h2 class="mt-5">Datos del Menu</h2>
                    <p>Puedes editar los campos y enviarlos para actualizarlos en la base de datos.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group">
                            <label>Código</label>
                            <input type="text" name="txtMenuCode" class="form-control" readonly value="<?php echo $menuCode ?>">
                            <span class="invalid-feedback"><?php echo $menuCode_error; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" name="txtMenuName" class="form-control <?php echo (!empty($menuName_error)) ? 'is-invalid' : ''; ?>" value="<?php echo $menuName ?>">
                            <span class="invalid-feedback"><?php echo $menuName_error; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Descripcion</label>
                            <input type="text" name="txtMenuDescription" class="form-control <?php echo (!empty($menuDescription_error)) ? 'is-invalid' : ''; ?>" value="<?php echo $menuDescription ?>">
                            <span class="invalid-feedback"><?php echo $menuDescription_error; ?></span>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Actualizar">
                        <a href="../../index.php" class="btn btn-secondary ml-2">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>