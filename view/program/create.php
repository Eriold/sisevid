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
$titleDocument = 'Página de guardado';
$programName = $programHighQuality = $programCode_IES  = "";
$programCodeSchool = 0;
$programName_error = $programCode_IES_error = $programCodeSchool_error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $inputProgramName = trim($_POST["txtProgramName"]);
    if (empty($inputProgramName)) {
        $programName_error = "Debe ingresar un Nombre para el programa";
    } else {
        $programName = $inputProgramName;
    }

    $programHighQuality = trim($_POST["txtProgramHighQuality"]);

    $inputProgramCodeSchool = trim($_POST["dpdtxtProgramCodeSchool"]);
    if ($inputProgramCodeSchool == 'Seleccionar...') {
        $programCodeSchool_error = "Debe ingresar el codigo de la facultad";
    } else {
        $programCodeSchool = intval($inputProgramCodeSchool);
    }

    //check input error is empty to insert
    if (empty($programName_error) && empty($programCode_IES_error) && empty($programCodeSchool_error) && empty($programCodeSchool_error)) {
        $objProgram = new Program('', $programName, $programHighQuality, $programCodeSchool);
        $objProgramConnetion = new ProgramController($objProgram);
        $objProgramConnetion->create();
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
                    <h2 class="mt-5">Registrar Programas</h2>
                    <p>Debes completar el formulario para registrar el Programa</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

                        <div class="form-group">
                            <label>Nombre del Programa</label>
                            <input type="text" name="txtProgramName" class="form-control <?php echo (!empty($programName_error)) ? 'is-invalid' : ''; ?>">
                            <span class="invalid-feedback"><?php echo $programName_error; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Alta Calidad</label>
                            <div class="input-group mb-3">
                                <select class="custom-select form-control" id="inputGroupSelect02" name="txtProgramHighQuality">
                                    <option selected value=''>Seleccionar...</option>
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
                                    <option selected>Seleccionar...</option>
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
                        <input type="submit" class="btn btn-primary" value="Enviar">
                        <a href="index.php" class="btn btn-secondary ml-2">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>