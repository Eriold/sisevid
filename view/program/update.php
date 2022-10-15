<?php
global $activeHeader;
$activeHeader = '_UPDATE';
global $titleDocument;
$titleDocument = 'Página de actualización';
include('../components/head.php');
include('../components/header.php');
include('../../model/Program.php');
include('../../controller/ProgramController.php');
include('../../controller/server.php');
include('../../controller/ConnectionController.php');

$programCode = $programName = $programHighQuality = $programCode_IES = "";
$programCodeSchool= 0;
$programCode_error = $programName_error = $programHighQuality_error = $programCode_IES_error = $programCodeSchool_error = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputProgramCode = trim($_POST["txtProgramCode"]);
    if (empty($inputProgramCode)) {
        $programCode_error = "Debe ingresar el código del Programa";
    } else {
        $programCode = $inputProgramCode;
    }
    $inputProgramName = trim($_POST["txtProgramName"]);
    if (empty($inputProgramName)) {
        $programName_error = "Debe ingresar el nombre del programa";
    } else {
        $programName = $inputProgramName;
    }
    $inputProgramHighQuality = trim($_POST["txtProgramHighQuality"]);
    if (empty($inputProgramHighQuality)) {
        $programHighQuality_error = "Debe ingresar el nivel de alta calidad del programa";
    } else {
        $programHighQuality = $inputProgramHighQuality;
    }
    $inputProgramCode_IES = trim($_POST["txtProgramCode_IES"]);
    if (empty($inputProgramCode_IES)) {
        $programCode_IES_error = "Debe ingresar el codigo IES del programa";
    } else {
        $programCode_IES = $inputProgramCode_IES;
    }
    $inputProgramCodeSchool = trim($_POST["txtProgramCodeSchool"]);
    if (empty($inputProgramCode_IES)) {
        $programCodeSchool_error = "Debe ingresar el codigo de la facultad";
    } else {
        $programCodeSchool = intval($inputProgramCodeSchool);
    }
    if (empty($programCode_error) && empty($programName_error) && empty($programHighQuality_error) && empty($programCode_IES_error) && empty($programCodeSchool_error)) {
        $objProgram = new Program($programCode, $programName, $programHighQuality, $programCode_IES, $programCodeSchool);
        $objProgramController = new ProgramController($objProgram);
        $objProgramController->update();
        header("location: index.php");
    }
} else {
    if (isset($_GET["id"]) && !empty(trim($_GET["id"]))) {
        $id = trim($_GET["id"]);
        $objProgram = new Program($id, "", "", "", 0);
        $objProgramController = new ProgramController($objProgram);
        $resGet = $objProgramController->read();
        foreach ($resGet as $item) {
            if ($item["Nombre"] && $item["Altacalidad"] && $item["Codsnies"] && $item["IDFacultades"]) {
                $programCode = $item["Idprogramas"];
                $programName = $item["Nombre"];
                $programHighQuality = $item["Altacalidad"];
                $programCode_IES = $item["Codsnies"];
                $programCodeSchool = $item["IDFacultades"];
            } else {
                // header("location: ../error.php");
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
                    <h2 class="mt-5">Datos de la facultad</h2>
                    <p>Puedes editar los campos y enviarlos para actualizarlos en la base de datos.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group">
                            <label>Código</label>
                            <input type="text" name="txtProgramCode" class="form-control" readonly value="<?php echo $programCode ?>">
                            <span class="invalid-feedback"><?php echo $programCode_error; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" name="txtProgramName" class="form-control <?php echo (!empty($programName_error)) ? 'is-invalid' : ''; ?>" value="<?php echo $programName ?>">
                            <span class="invalid-feedback"><?php echo $programName_error; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Alta Calidad</label>
                            <input type="text" name="txtProgramHighQuality" class="form-control <?php echo (!empty($programHighQuality_error)) ? 'is-invalid' : ''; ?>" value="<?php echo $programHighQuality ?>">
                            <span class="invalid-feedback"><?php echo $programHighQuality_error; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Codigo IES</label>
                            <input type="text" name="txtProgramCode_IES" class="form-control <?php echo (!empty($programCode_IES_error)) ? 'is-invalid' : ''; ?>" value="<?php echo $programCode_IES ?>">
                            <span class="invalid-feedback"><?php echo $programCode_IES_error; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Codigo Facultad</label>
                            <input type="number" name="txtProgramCodeSchool" class="form-control <?php echo (!empty($programCodeSchool_error)) ? 'is-invalid' : ''; ?>" value="<?php echo $programCodeSchool ?>">
                            <span class="invalid-feedback"><?php echo $programCodeSchool_error; ?></span>
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