<?php
include('../../model/Menu.php');
include('../../controller/ConnectionController.php');
include('../../controller/MenuController.php');
include('../../controller/server.php');

global $activeHeader;
$activeHeader = '_MENU';
global $titleDocument;
$titleDocument = 'Página de solo lectura';
$menuCode = $menuName = $menuDescription = "";

if ($menuCode = trim($_GET["id"])) {
    $objMenu = new Menu($menuCode, '', '', '');
    $objMenuConnetion = new MenuController($objMenu);
    $row = $objMenuConnetion->read();
    if (count($row) > 0) {
        foreach ($row as $res) {
            $menuName = $res['Nombre'];
            $menuDescription = $res['Descripcion'];
        }
    } else {
        header("location: ../error.php");
    }
} else {
    header("location: ../error.php");
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
                    <h2 class="mt-5">Información detallada de los Menu</h2>
                    <form>
                        <div class="form-group">
                            <label>Código del Menu</label>
                            <input type="text" class="form-control" value="<?php echo $menuCode ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label>Nombre del Menu</label>
                            <input type="text" class="form-control" value="<?php echo $menuName ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label>Descripcion del Menu</label>
                            <input type="text" class="form-control" value="<?php echo $menuDescription ?>" readonly>
                        </div>
                        <a href="index.php" class="btn btn-primary">Regresar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>