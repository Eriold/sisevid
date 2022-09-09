<?php
// include('./view/components/head.php');
// include('./view/components/header.php');
// $segments = array_slice(explode("/", $_SERVER["PATH_INFO"] ),1);
$segments = isset($_SERVER['PHP_SELF']) ? $_SERVER['PHP_SELF'] : '';
echo $segments;
?>

<h1>Crear</h1>