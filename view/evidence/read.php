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

$objArticle = new Evidence('', '', '');
$objArticleConnection = new EvidenceController($objArticle);
$row = $objArticleConnection->allArticle();

if ($IdEvidence = trim($_GET["id"])) {
    $objEvidence = new Evidence("", "", $IdEvidence);
    $objEvidenceController = new EvidenceController($objEvidence);
    $resGet = $objEvidenceController->read();
    if (count($resGet) > 0) {
        foreach ($resGet as $item) {
            $evidenceId = $item["Idevidencias"];
            $evidenceName = $item["Nombre"];
            $evidenceArticle = $item["Idarticulos"];
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
                    <h2 class="mt-5">Registrar Evidencia</h2>
                    <p>Puedes actualizar los registros de Evidencia</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group">
                            <label>ID Evidencia</label>
                            <input type="text" name="txtEvivdenceName" class="form-control" value="<?php echo $evidenceId ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" name="txtEvivdenceName" class="form-control " value="<?php echo $evidenceName ?>" disabled>
                            <span class="invalid-feedback"><?php echo $evidenceName_error; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Artículo</label>
                            <div class="input-group mb-3">
                                <select class="custom-select form-control" id="inputGroupSelect02" name="dpdtxtEvidenceArticle" disabled>
                                    <?php
                                    foreach ($row as $item) {
                                        if ($item['Idarticulos'] == $evidenceArticle) {
                                            echo '<option value="', $item['Idarticulos'], '">', $item['Idarticulos'], '. ', $item['Nombre'], '</option>';
                                        }
                                    }
                                    ?>
                                </select>
                                <div class="input-group-append">
                                    <label class="input-group-text" for="inputGroupSelect02">Opciones...</label>

                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <a href="index.php" class="btn btn-primary">Regresar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>