<?php
include('../../model/School.php');
include('../../controller/ConnectionController.php');
include('../../controller/SchoolController.php');
include('../../controller/server.php');

global $activeHeader;
$activeHeader = '_CREATE';
global $titleDocument;
$titleDocument = 'Página de solo lectura';
$schoolCode = $schoolName = $schoolDean = $schoolIES = "";

if ($schoolCode = trim($_GET["id"])) {
    $objSchool = new School($schoolCode, '', '', '');
    $objSchoolConnetion = new SchoolController($objSchool);
    $row = $objSchoolConnetion->read();
    if (count($row) > 0) {
        foreach ($row as $res) {
            $schoolName = $res['Nombre'];
            $schoolDean = $res['Decano'];
            $schoolIES = $res['Ies_nombre'];
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
                    <h2 class="mt-5">Información detallada de la Facultad</h2>
                    <form>
                        <div class="form-group">
                            <label>Código Facultad</label>
                            <input type="text" class="form-control" value="<?php echo $schoolCode ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label>Nombre de la Facultad</label>
                            <input type="text" class="form-control" value="<?php echo $schoolName ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label>Nombre Decano</label>
                            <input type="text" class="form-control" value="<?php echo $schoolDean ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label>Nombre IES</label>
                            <input type="text" class="form-control" value="<?php echo $schoolIES ?>" readonly>
                        </div>
                        <a href="index.php" class="btn btn-primary">Regresar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>