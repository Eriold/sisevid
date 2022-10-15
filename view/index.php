<?php

global $activeHeader;
$activeHeader = '_HOME';
global $titleDocument;
$titleDocument = 'Página de bienvenida';
?>
<!DOCTYPE html>
<html lang="en">

<?php include('./components/head.php') ?>

<body>
    <?php include('./components/header.php') ?>
</body>
<div class="wrapper2">
    <h1>Hola <span style="color: blue"><?php echo $_SESSION['name_user'] ?></span> Bienvenido a sisevid </h1>
</div>

</html>