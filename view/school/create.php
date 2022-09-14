<?php
include('../../model/School.php');
include('../../controller/ConnectionController.php');
include('../../controller/SchoolController.php');
include('../../controller/server.php');

global $activeHeader;
$activeHeader = '_CREATE';
global $titleDocument;
$titleDocument = 'Página de guardado';
$schoolCode = $schoolName = $schoolDean = $schoolIES = "";
$schoolCode_error = $schoolName_error  = $schoolDean_error  = $schoolIES_error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //validate input
    $inputSchoolCode = trim($_POST["txtSchoolCode"]);
    if (empty($inputSchoolCode)) {
        $schoolCode_error = "Debe ingresar un Codigo";
    } else {
        $schoolCode = $inputSchoolCode;
    }
    $inputSchoolName = trim($_POST["txtSchoolName"]);
    if (empty($inputSchoolName)) {
        $schoolName_error = "Debe ingresar un Nombre para la facultad";
    } else {
        $schoolName = $inputSchoolName;
    }
    $inputSchoolDean = trim($_POST["txtSchoolDean"]);
    if (empty($inputSchoolDean)) {
        $schoolDean_error = "Debe ingresar el nombre del decano";
    } else {
        $schoolDean = $inputSchoolDean;
    }
    $inputSchoolIES = trim($_POST["txtSchoolIES"]);
    if (empty($inputSchoolIES)) {
        $schoolIES_error = "Debe ingresar el nombre IES";
    } else {
        $schoolIES = $inputSchoolIES;
    }

    //check input error is empty to insert
    if (empty($schoolCode_error) && empty($schoolName_error) && empty($schoolDean_error) && empty($schoolIES_error)) {
        $objSchool = new School($schoolCode, $schoolName, $schoolDean, $schoolIES);
        $objSchoolConnetion = new SchoolController($objSchool);
        $objSchoolConnetion->create();
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
                    <h2 class="mt-5">Registrar Facultades</h2>
                    <p>Debes completar el formulario para registrar Facultad</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group">
                            <label>Código Facultad</label>
                            <input type="text" name="txtSchoolCode" class="form-control <?php echo (!empty($schoolCode_error)) ? 'is-invalid' : ''; ?>">
                            <span class="invalid-feedback"><?php echo $schoolCode_error; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Nombre de la Facultad</label>
                            <input type="text" name="txtSchoolName" class="form-control <?php echo (!empty($schoolName_error)) ? 'is-invalid' : ''; ?>">
                            <span class="invalid-feedback"><?php echo $schoolName_error; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Nombre Decano</label>
                            <input type="text" name="txtSchoolDean" class="form-control <?php echo (!empty($schoolDean_error)) ? 'is-invalid' : ''; ?>">
                            <span class="invalid-feedback"><?php echo $schoolDean_error; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Nombre IES</label>
                            <input type="text" name="txtSchoolIES" class="form-control <?php echo (!empty($schoolIES_error)) ? 'is-invalid' : ''; ?>">
                            <span class="invalid-feedback"><?php echo $schoolIES_error; ?></span>
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