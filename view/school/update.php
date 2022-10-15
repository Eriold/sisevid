<?php
global $activeHeader;
$activeHeader = '_SCHOOL';
global $titleDocument;
$titleDocument = 'Página de actualización';
include('../components/head.php');
include('../components/header.php');
include('../../model/School.php');
include('../../controller/SchoolController.php');
include('../../controller/server.php');
include('../../controller/ConnectionController.php');

$schoolCode = $schoolName = $schoolDean = $schoolIES = "";
$schoolCode_error = $schoolName_error = $schoolDean_error = $schoolIES_error = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputSchoolCode = trim($_POST["txtSchoolCode"]);
    if (empty($inputSchoolCode)) {
        $schoolCode_error = "Debe ingresar el código de la facultad";
    } else {
        $schoolCode = $inputSchoolCode;
    }
    $inputSchoolName = trim($_POST["txtSchoolName"]);
    if (empty($inputSchoolName)) {
        $schoolName_error = "Debe ingresar el nombre de la facultad";
    } else {
        $schoolName = $inputSchoolName;
    }
    $inputSchoolDean = trim($_POST["txtSchoolDean"]);
    if (empty($inputSchoolDean)) {
        $schoolDean_error = "Debe ingresar el nombre del decano de la facultad";
    } else {
        $schoolDean = $inputSchoolDean;
    }
    $inputSchoolIES = trim($_POST["txtSchoolIES"]);
    if (empty($inputSchoolIES)) {
        $schoolIES_error = "Debe ingresar la IES de la facultad";
    } else {
        $schoolIES = $inputSchoolIES;
    }
    if (empty($schoolCode_error) && empty($schoolName_error) && empty($schoolDean_error) && empty($schoolIES_error)) {
        $objSchool = new School($schoolCode, $schoolName, $schoolDean, $schoolIES);
        $objSchoolController = new SchoolController($objSchool);
        $objSchoolController->update();
        header("location: index.php");
    }
} else {
    if (isset($_GET["id"]) && !empty(trim($_GET["id"]))) {
        $id = trim($_GET["id"]);
        $objSchool = new School($id, "", "", "");
        $objSchoolController = new SchoolController($objSchool);
        $resGet = $objSchoolController->read();
        foreach ($resGet as $item) {
            if ($item["Nombre"] && $item["Decano"] && $item["Ies_nombre"]) {
                $schoolCode = $item["Idfacultades"];
                $schoolName = $item["Nombre"];
                $schoolDean = $item["Decano"];
                $schoolIES = $item["Ies_nombre"];
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
                    <h2 class="mt-5">Datos de la facultad</h2>
                    <p>Puedes editar los campos y enviarlos para actualizarlos en la base de datos.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group">
                            <label>Código</label>
                            <input type="text" name="txtSchoolCode" class="form-control" readonly value="<?php echo $schoolCode ?>">
                            <span class="invalid-feedback"><?php echo $schoolCode_error; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" name="txtSchoolName" class="form-control <?php echo (!empty($schoolName_error)) ? 'is-invalid' : ''; ?>" value="<?php echo $schoolName ?>">
                            <span class="invalid-feedback"><?php echo $schoolName_error; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Decano</label>
                            <input type="text" name="txtSchoolDean" class="form-control <?php echo (!empty($schoolDean_error)) ? 'is-invalid' : ''; ?>" value="<?php echo $schoolDean ?>">
                            <span class="invalid-feedback"><?php echo $schoolDean_error; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Nombre IES</label>
                            <input type="text" name="txtSchoolIES" class="form-control <?php echo (!empty($schoolIES_error)) ? 'is-invalid' : ''; ?>" value="<?php echo $schoolIES ?>">
                            <span class="invalid-feedback"><?php echo $schoolIES_error; ?></span>
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