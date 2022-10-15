<?php
include('../../model/Program.php');
include('../../controller/ConnectionController.php');
include('../../controller/ProgramController.php');
include('../../controller/server.php');

global $activeHeader;
$activeHeader = '_CREATE';
global $titleDocument;
$titleDocument = 'Página de guardado';
$programName = $programHighQuality = $programCode_IES  = "";
$programCodeSchool = 0;
$programName_error  = $programHighQuality_error  = $programCode_IES_error = $programCodeSchool_error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $inputProgramName = trim($_POST["txtProgramName"]);
    if (empty($inputProgramName)) {
        $programName_error = "Debe ingresar un Nombre para el programa";
    } else {
        $programName = $inputProgramName;
    }
    $inputProgramHighQuality = trim($_POST["txtProgramHighQuality"]);
    if (empty($inputProgramHighQuality)) {
        $programHighQuality_error = "Debe ingresar el nive de alta calidad del programa";
    } else {
        $programHighQuality = $inputProgramHighQuality;
    }
    $inputProgramCode_IES = trim($_POST["txtProgramCode_IES"]);
    if (empty($inputProgramCode_IES)) {
        $programCode_IES_error = "Debe ingresar el codigo IES";
    } else {
        $programCode_IES = $inputProgramCode_IES;
    }
    $inputProgramCodeSchool = trim($_POST["txtProgramCodeSchool"]);
    if (empty($inputProgramCodeSchool)) {
        $programCodeSchool_error = "Debe ingresar el codigo de la facultad";
    } else {
        $programCodeSchool = intval ($inputProgramCodeSchool);
    }

    //check input error is empty to insert
    if (empty($programName_error) && empty($programHighQuality_error) && empty($programCode_IES_error)) {
        $objProgram = new Program('', $programName, $programHighQuality, $programCode_IES, $programCodeSchool);
        $objProgramConnetion = new ProgramController($objProgram);
        $objProgramConnetion->create();
        //header("location: index.php");
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
                            <input type="number" name="txtProgramHighQuality" class="form-control <?php echo (!empty($programHighQuality_error)) ? 'is-invalid' : ''; ?>">
                            <span class="invalid-feedback"><?php echo $programHighQuality_error; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Codigo IES</label>
                            <input type="number" name="txtProgramCode_IES" class="form-control <?php echo (!empty($programCode_IES_error)) ? 'is-invalid' : ''; ?>">
                            <span class="invalid-feedback"><?php echo $programCode_IES_error; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Codigo de la Facultad</label>
                            <input type="number" name="txtProgramCodeSchool" class="form-control <?php echo (!empty($programCodeSchool_error)) ? 'is-invalid' : ''; ?>">
                            <span class="invalid-feedback"><?php echo $programCodeSchool_error; ?></span>
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