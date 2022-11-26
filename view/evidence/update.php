<?php
include('../../model/Evidence.php');
include('../../controller/ConnectionController.php');
include('../../controller/EvidenceController.php');
include('../../controller/server.php');

global $activeHeader;
$activeHeader = '_EVIDENCE';
global $titleDocument;
$titleDocument = 'Página de guardado';

$evidenceId = $evidenceName = $evidenceArticle = '';
$evidenceName_error = $evidenceArticle_error = '';

$objArticle = new Evidence('', '', '');
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

    if (empty($evidenceName_error) && empty($evidenceArticle_error)) {
        $objEvidence = new Evidence($evidenceName, $evidenceArticle, '');
        $objEvidenceConnection = new EvidenceController($objEvidence);
        $objEvidenceConnection->create();
        header("location: index.php");
    }
} else {
    if (isset($_GET["id"]) && !empty(trim($_GET["id"]))) {
        $IdEvidence = trim($_GET["id"]);
        $objEvidence = new Evidence("", "", $IdEvidence);
        $objEvidenceController = new EvidenceController($objEvidence);
        $resGet = $objEvidenceController->read();
        if (count($resGet) > 0) {
            foreach ($resGet as $item) {
                if ($item["idEvidence"] && $item["name"] && $item["idArticle"]) {
                    $evidenceId = $item["idEvidence"];
                    $evidenceName = $item["name"];
                    $evidenceArticle = $item["idArticle"];
                }
            }
        } else {
            header("location: ../error.php");
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<?php include('../components/head.php') ?>
<!– Permisos para cambiar el estado de una evidencia –>
<script src="C:/xampp/htdocs/sisevid/view/user/validateuser.js"></script>
<body>
    <?php include('../components/header.php') ?>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Registrar Evidencia</h2>
                    <p>Puedes actualizar los registros de Evidencia</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group">
                            <label>ID Evidencia</label>
                            <input type="text" name="txtEvivdenceName" class="form-control" value="<?php echo $evidenceId ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" name="txtEvivdenceName" class="form-control <?php echo (!empty($evidenceName_error)) ? 'is-invalid' : ''; ?>" value="<?php echo $evidenceName ?>">
                            <span class="invalid-feedback"><?php echo $evidenceName_error; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Artículo</label>
                            <div class="input-group mb-3">
                                <select class="custom-select form-control <?php echo (!empty($evidenceArticle_error)) ? 'is-invalid' : ''; ?>" id="inputGroupSelect02" name="dpdtxtEvidenceArticle">
                                    <?php
                                    foreach ($row as $item) {
                                        if ($item['idArticle'] == $evidenceArticle) {
                                            echo '<option value="', $item['idArticle'], '">', $item['idArticle'], '. ', $item['name'], '</option>';
                                        }
                                    }
                                    ?>
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
                            <input type="submit" class="btn btn-primary" value="Enviar">
                            <a href="index.php" class="btn btn-secondary ml-2">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>