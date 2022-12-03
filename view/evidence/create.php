<?php
include('../../model/Evidence.php');
include('../../controller/ConnectionController.php');
include('../../controller/EvidenceController.php');
include('../../controller/server.php');

global $activeHeader;
$activeHeader = '_EVIDENCE';
global $titleDocument;
$titleDocument = 'Página de guardado';

$evidenceName = $evidenceArticle = $dateEvidence = $dateModificationEvidence = $observationEvidence = $descriptionEvidence = '';
$evidenceName_error = $evidenceArticle_error = $dateEvidence_error = $dateModificationEvidence_error = $observationEvidence_error = $descriptionEvidence_error = '';

$objArticle = new Evidence('', '', '','', '','','');
$objArticleConnection = new EvidenceController($objArticle);
$row = $objArticleConnection->allArticle();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $inputEvidenceName = trim($_POST["txtEvivdenceName"]);
    if (empty($inputEvidenceName)) {
        $evidenceName_error = "Debe ingresar un nombre de evidencia";
    } else {
        $evidenceName = $inputEvidenceName;
    }

    $inputEvidenceArticle = trim($_POST["dpdtxtEvidenceArticle"]);
    if ($inputEvidenceArticle == 'Seleccionar...') {
        $evidenceArticle_error = 'Seleccina algún artículo listado';
    } else {
        $evidenceArticle = $inputEvidenceArticle;
    }

    $inputEvidenceDescription = trim($_POST["txtEvivdenceDescription"]);
    if (empty($inputEvidenceDescription)) {
        $descriptionEvidence_error = 'Debe ingresar una descripcion de la evidencia';
    } else {
        $descriptionEvidence = $inputEvidenceDescription;
    }

    $inputEvidenceObservation = trim($_POST["txtEvivdenceObservation"]);
    if (empty($inputEvidenceObservation)) {
        $observationEvidence_error = "Debe ingresar una observacion de la evidencia";
    } else {
        $observationEvidence = $inputEvidenceObservation;
    }
    
    if(isset($_POST['UploadEvidence'])){

        $img = $_FILES['images']['name'];
        $img_local = $_FILES['images']['tmp_name'];
        $img_folder = "Save_File/";

        if(move_uploaded_file($img_local, $img_folder.$img)){

            ?>
            <script>alert('Archivo Guardado con exito!');</script> 
            <?php
        }else{

            ?>
            <script>alert('Archivo no guardado');</script> 
            <?php
        }
    }

    $dateEvidence = (string)(date('d-m-Y'));
    $dateModificationEvidence = (string)(date('d-m-Y'));

    if (empty($evidenceName_error) && empty($evidenceArticle_error) && empty($observationEvidence_error) && empty($descriptionEvidence_error)) {
        $objEvidence = new Evidence($evidenceName, $evidenceArticle,'', $dateEvidence, $dateModificationEvidence, $observationEvidence, $descriptionEvidence);
        $objEvidenceConnection = new EvidenceController($objEvidence);
        $objEvidenceConnection->create();
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
                    <h2 class="mt-5">Registrar Evidencia</h2>
                    <p>Debes completar el formulario para registrar evidencias</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" name="txtEvivdenceName" class="form-control <?php echo (!empty($evidenceName_error)) ? 'is-invalid' : ''; ?>">
                            <span class="invalid-feedback"><?php echo $evidenceName_error; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Artículo</label>
                            <div class="input-group mb-3">
                                <select class="custom-select form-control <?php echo (!empty($evidenceArticle_error)) ? 'is-invalid' : ''; ?>" id="inputGroupSelect02" name="dpdtxtEvidenceArticle">
                                    <option selected>Seleccionar...</option>
                                    <?php
                                    foreach ($row as $item) {
                                        echo '<option value="', $item['idArticle'], '">', $item['idArticle'], '. ', $item['name'], '</option>';
                                    }
                                    ?>
                                </select>
                                <div class="input-group-append">
                                    <label class="input-group-text" for="inputGroupSelect02">Opciones...</label>

                                </div>
                                <span class="invalid-feedback d-block"><?php echo $evidenceArticle_error; ?></span>
                            </div>
                            <span class="invalid-feedback"><?php echo $name_err; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Descripción</label>
                            <input type="text" name="txtEvivdenceDescription" class="form-control <?php echo (!empty($descriptionEvidence_error)) ? 'is-invalid' : ''; ?>">
                            <span class="invalid-feedback"><?php echo $descriptionEvidence_error; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Observación</label>
                            <input type="text" name="txtEvivdenceObservation" class="form-control <?php echo (!empty($observationEvidence_error)) ? 'is-invalid' : ''; ?>">
                            <span class="invalid-feedback"><?php echo $observationEvidence_error; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Archivo</label>
                            <input type="file" name="images" class="form-control btn btn-primary">
                           <!-- <span class="invalid-feedback"><?php echo $observationEvidence_error; ?></span>-->
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Enviar">
                            <a href="index.php" class="btn btn-secondary ml-2">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>