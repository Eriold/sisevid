<?php
global $activeHeader;
$activeHeader = '_CREATE';
global $titleDocument;
$titleDocument = 'Página de guardado';

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
                            <label>Código</label>
                            <input type="text" name="txtCode" class="form-control <?php echo (!empty($code_err)) ? 'is-invalid' : ''; ?>">
                            <span class="invalid-feedback"><?php echo $code_err; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" name="txtName" class="form-control <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>">
                            <span class="invalid-feedback"><?php echo $name_err; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Teléfono</label>
                            <input type="text" name="txtPhoneNumber" class="form-control <?php echo (!empty($phoneNumber_err)) ? 'is-invalid' : ''; ?>">
                            <span class="invalid-feedback"><?php echo $phoneNumber_err; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Correo electrónico</label>
                            <input type="text" name="txtEmail" class="form-control <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>">
                            <span class="invalid-feedback"><?php echo $email_err; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Dirección</label>
                            <input type="text" name="txtAddress" class="form-control <?php echo (!empty($address_err)) ? 'is-invalid' : ''; ?>">
                            <span class="invalid-feedback"><?php echo $address_err; ?></span>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Enviar">
                        <a href="../index.php" class="btn btn-secondary ml-2">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>