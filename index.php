<?php

// Start global page
global $activeHeader;
$activeHeader = '_HOME';
global $titleDocument;
$titleDocument = 'Página de inicio';

include('./view/components/head.php');
include('./view/components/header.php');

// $segments = isset($_SERVER['PHP_SELF']) ? $_SERVER['PHP_SELF'] : '';
// $res = preg_replace('/[a-z,.]/', '', $segments);
// echo $res;
// $testArray = explode("/", $res);
// echo var_dump($testArray);