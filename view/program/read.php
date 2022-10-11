<?php
include('../../model/Program.php');
include('../../controller/ConnectionController.php');
include('../../controller/ProgramController.php');
include('../../controller/server.php');

global $activeHeader;
$activeHeader = '_CREATE';
global $titleDocument;
$titleDocument = 'Página de solo lectura';
$programCode = $programName = $programHighQuality = $programCode_IES = $programCodeSchool = "";

if ($programCode = trim($_GET["id"])) {
    $objProgram = new Program($programCode, '', '', '', '');
    $objProgramConnetion = new ProgramController($objProgram);
    $row = $objProgramConnetion->read();
    if (count($row) > 0) {
        foreach ($row as $res) {
            $programName = $res['Nombre'];
            $programHighQuality = $res['Altacalidad'];
            $programCode_IES = $res['Codsnies'];
            $programCodeSchool = $res['IDFacultades'];
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
                    <h2 class="mt-5">Información detallada del Programa</h2>
                    <form>
                        <div class="form-group">
                            <label>Código Programa</label>
                            <input type="text" class="form-control" value="<?php echo $programCode ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label>Nombre del programa</label>
                            <input type="text" class="form-control" value="<?php echo $programName ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label>Alta Calidad</label>
                            <input type="text" class="form-control" value="<?php echo $programHighQuality ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label>Codigo IES</label>
                            <input type="text" class="form-control" value="<?php echo $programCode_IES ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label>Codigo Facultad</label>
                            <input type="text" class="form-control" value="<?php echo $programCodeSchool ?>" readonly>
                        </div>
                        <a href="../../index.php" class="btn btn-primary">Regresar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>