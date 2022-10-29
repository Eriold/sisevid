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
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
<div class="main">

	<div class = "border">
		<div class = "inner-cutout"> 
			<h1 class="knockout"><span style="color: blue"><?php echo $_SESSION['name_user'] ?></span> Bienvenido a sisevid</h1>
            <!-- <h1 class="knockout"><span style="color: blue">Hola Señor y Señora</span> Sanchez Guirales</h1> -->

        </div>
	</div>
</div>
</body>
<!-- <div class="wrapper2">
    
</div> -->

</html>