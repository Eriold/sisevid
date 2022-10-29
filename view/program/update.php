<?php
include('../../model/Program.php');
include('../../model/School.php');
include('../../controller/ConnectionController.php');
include('../../controller/ProgramController.php');
include('../../controller/SchoolController.php');
include('../../controller/server.php');

$objSchool = new School('', '', '', '');
$objSchoolConnection = new SchoolController($objSchool);
$row = $objSchoolConnection->readAll();


global $activeHeader;
$activeHeader = '_PROGRAMS';
global $titleDocument;
$titleDocument = 'Página de actualización';

$programCode = $programName = $programHighQuality = $programCode_IES = "";
$programCodeSchool = 0;
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
    $programHighQuality = trim($_POST["txtProgramHighQuality"]);

    $inputProgramCode_IES = trim($_POST["txtProgramCode_IES"]);
    if (empty($inputProgramCode_IES)) {
        $programCode_IES_error = "Debe ingresar el codigo IES del programa";
    } else {
        $programCode_IES = $inputProgramCode_IES;
    }
    $inputProgramCodeSchool = trim($_POST["dpdtxtProgramCodeSchool"]);
    if ($inputProgramCodeSchool == 'Seleccionar...') {
        $programCodeSchool_error = "Debe ingresar el codigo de la facultad";
    } else {
        $programCodeSchool = intval($inputProgramCodeSchool);
    }
    if (empty($programCode_error) && empty($programName_error) && empty($programCode_IES_error) && empty($programCodeSchool_error)) {
        $objProgram = new Program($programCode, $programName, $programHighQuality, $programCode_IES, $programCodeSchool);
        $objProgramController = new ProgramController($objProgram);
        $objProgramController->update();
        header("location: index.php");
    }
} else {
    if (isset($_GET["id"]) && !empty(trim($_GET["id"]))) {
        $id = trim($_GET["id"]);
        $objProgram = new Program($id, "", "", 0);
        $objProgramController = new ProgramController($objProgram);
        $resGet = $objProgramController->read();
        foreach ($resGet as $item) {
            if ($item["idProgram"] && $item["name"] && $item["highQuality"] && $item["idFaculty"]) {
                $programCode = $item["idProgram"];
                $programName = $item["name"];
                $programHighQuality = $item["highQuality"];
                $programCodeSchool = $item["idFaculty"];
            } else {
                header("location: ../error.php");
            }
        }
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
                            <div class="input-group mb-3">
                                <select class="custom-select form-control" id="inputGroupSelect02" name="txtProgramHighQuality">
                                    <?php
                                    if ($programHighQuality == 1 || $programHighQuality == '1') {
                                        echo "<option selected value='1'>SI</option>";
                                    } else if ($programHighQuality == 0 || $programHighQuality == '0') {
                                        echo "<option selected value='0'>NO</option>";
                                    } else {
                                        echo "<option selected value='0'>Selecciona...</option>";
                                    }
                                    ?>

                                    <option value="0">NO</option>
                                    <option value="1">SI</option>
                                </select>
                                <div class="input-group-append">
                                    <label class="input-group-text" for="inputGroupSelect02">Opciones...</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Codigo de la Facultad</label>
                            <div class="input-group mb-3">
                                <select class="custom-select form-control <?php echo (!empty($programCodeSchool_error)) ? 'is-invalid' : ''; ?>" id="inputGroupSelect02" name="dpdtxtProgramCodeSchool">
                                    <?php
                                    foreach ($row as $item) {
                                        if ($item['idFaculty'] == $programCodeSchool) {
                                            echo '<option value="', $item['idFaculty'], '">', $item['iesName'], '</option>';
                                        }
                                    }
                                    ?>
                                    <?php
                                    foreach ($row as $item) {
                                        echo '<option value="', $item['idFaculty'], '">', $item['iesName'], '</option>';
                                    }
                                    ?>
                                </select>
                                <div class="input-group-append">
                                    <label class="input-group-text" for="inputGroupSelect02">Opciones...</label>
                                </div>
                            </div>
                            <span class="invalid-feedback d-block"><?php echo $programCodeSchool_error; ?></span>
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