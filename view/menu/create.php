<?php
include('../../model/Menu.php');
include('../../controller/ConnectionController.php');
include('../../controller/MenuController.php');
include('../../controller/server.php');

global $activeHeader;
$activeHeader = '_CREATE';
global $titleDocument;
$titleDocument = 'Página de guardado';
$menuName = $menuDescription = "";
$menuName_error  = $menuDescription_error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $inputMenuName = trim($_POST["txtMenuName"]);
    if (empty($inputMenuName)) {
        $menuName_error = "Debe ingresar el nombre del Menu";
    } else {
        $menuName = $inputMenuName;
    }
    $inputMenuDescription = trim($_POST["txtMenuDescription"]);
    if (empty($inputMenuDescription)) {
        $menuDescription_error = "Debe ingresar el nombre del decano";
    } else {
        $menuDescription = $inputMenuDescription;
    }

    //check input error is empty to insert
    if (empty($menuName_error) && empty($menuDescription_error)) {
        $objMenu = new Menu('', $menuName, $menuDescription);
        $objMenuConnetion = new MenuController($objMenu);
        $objMenuConnetion->create();
        header("location: ../../index.php");
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
                    <h2 class="mt-5">Registrar Menu</h2>
                    <p>Debes completar el formulario para crear un menu</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        
                        <div class="form-group">
                            <label>Nombre del menu</label>
                            <input type="text" name="txtMenuName" class="form-control <?php echo (!empty($menuName_error)) ? 'is-invalid' : ''; ?>">
                            <span class="invalid-feedback"><?php echo $menuName_error; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Descripción</label>
                            <input type="text" name="txtMenuDescription" class="form-control <?php echo (!empty($menuDescription_error)) ? 'is-invalid' : ''; ?>">
                            <span class="invalid-feedback"><?php echo $menuDescription_error; ?></span>
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