<?php
global $activeHeader;
$activeHeader = '_DELETE';
global $titleDocument;
$titleDocument = 'Página de borrado';
include('../../controller/ConnectionController.php');
include('../../controller/SchoolController.php');
include('../../model/School.php');
include('../../controller/server.php');

if (isset($_POST["id"]) && !empty($_POST["id"])) {

    $schoolCode = trim($_POST["id"]);
    $objSchool = new School($schoolCode,'','','');
    $objSchoolController = new SchoolController($objSchool);
    $objSchoolController->delete();
    header("location: ../../index.php");
} else {
    // Check existence of id parameter
    if (empty(trim($_GET["id"]))) {
        // URL doesn't contain id parameter. Redirect to error page
        header("location: ../error.php");
        exit();
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
                    <h2 class="mt-5 mb-3">Borrar Facultad</h2>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="alert alert-danger">
                            <input type="hidden" name="id" value="<?php echo trim($_GET["id"]); ?>" />
                            <p>¿Estás seguro que quieres borrar a esta Facultad?</p>
                            <p>
                                <input type="submit" value="Si" class="btn btn-danger">
                                <a href="../../index.php" class="btn btn-secondary">No</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
